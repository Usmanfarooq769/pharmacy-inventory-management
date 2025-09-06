<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportSuppliers;
use App\Imports\SuppliersImport;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SystemUserController extends Controller
{
    public function index()
    {
        $roles = Role::pluck('name','id');
        return view('system_user.index', compact('roles'));
    }

    public function getData(Request $request)
    {
        $query = User::query();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('profile', function ($user) {
                $photo = $user->profile_photo_path 
                    ? asset('storage/'.$user->profile_photo_path) 
                    : asset('traderPanel/images/userpic.png'); 
                return '<img src="'.$photo.'" alt="'.$user->name.'" width="40" height="40" class="rounded-circle">';
            })
            ->addColumn('roles', function ($user) {
                // Get roles using custom pivot table
                $roles = \DB::table('user_roles')
                    ->join('roles', 'user_roles.role_id', '=', 'roles.id')
                    ->where('user_roles.user_id', $user->id)
                    ->pluck('roles.name');
                return $roles->implode(', ');
            })
            ->addColumn('action', function ($user) {
                return '
                <button class="btn btn-sm btn-primary-light viewUser" data-id="'.$user->id.'">
                        <i class="bi bi-eye"></i>
                    </button>
                    <button class="btn btn-sm btn-success-light editUser" data-id="'.$user->id.'">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-sm btn-danger-light deleteUser" data-id="'.$user->id.'">
                        <i class="bi bi-trash"></i>
                    </button>
                ';
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        // Custom validation for profile photo
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$request->id,
            'password' => $request->id ? 'nullable|min:6' : 'required|min:6',
            'roles' => 'required|array',
        ];

        // Only add profile photo validation if a file is uploaded
        if ($request->hasFile('profile_photo')) {
            $rules['profile_photo'] = 'image|mimes:jpg,jpeg,png,gif|max:2048';
        }

        $request->validate($rules);

        try {
            \DB::beginTransaction();

            // Handle password logic
            $passwordData = [];
            if ($request->password) {
                $passwordData['password'] = Hash::make($request->password);
            }

            $user = User::updateOrCreate(
                ['id' => $request->id],
                array_merge([
                    'name' => $request->name,
                    'email' => $request->email,
                ], $passwordData)
            );

            // Handle profile photo upload
            if ($request->hasFile('profile_photo')) {
                $file = $request->file('profile_photo');
                
                // Check if file is valid
                if (!$file->isValid()) {
                    throw new \Exception('Invalid file upload');
                }

                // Create profiles directory if it doesn't exist
                if (!Storage::disk('public')->exists('Profiles')) {
                    Storage::disk('public')->makeDirectory('Profiles');
                }

                // Delete old photo if exists
                if ($user->profile_photo_path && Storage::disk('public')->exists($user->profile_photo_path)) {
                    Storage::disk('public')->delete($user->profile_photo_path);
                }
                
                // Generate unique filename
                $filename = time() . '_' . $user->id . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('profiles', $filename, 'public');
                
                if (!$path) {
                    throw new \Exception('Failed to store file');
                }
                
                $user->profile_photo_path = $path;
                $user->save();
            }

            // Sync roles using custom pivot table
            // Remove existing roles
            \DB::table('user_roles')->where('user_id', $user->id)->delete();
            
            // Add new roles
            if (!empty($request->roles)) {
                $insertData = [];
                foreach ($request->roles as $roleId) {
                    $insertData[] = [
                        'user_id' => $user->id,
                        'role_id' => $roleId,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
                \DB::table('user_roles')->insert($insertData);
            }

            \DB::commit();

            return response()->json(['message' => 'User saved successfully']);
            
        } catch (\Exception $e) {
            \DB::rollback();
            
            // Log the actual error for debugging
            \Log::error('User save error: ' . $e->getMessage());
            
            // Return user-friendly error
            $message = 'Error saving user';
            if (str_contains($e->getMessage(), 'file') || str_contains($e->getMessage(), 'upload')) {
                $message = 'The profile photo failed to upload. Please try a smaller image.';
            }
            
            return response()->json([
                'message' => $message,
                'errors' => ['profile_photo' => [$message]]
            ], 422);
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        // Get user roles using custom pivot table
        $roles = \DB::table('user_roles')
            ->join('roles', 'user_roles.role_id', '=', 'roles.id')
            ->where('user_roles.user_id', $id)
            ->select('roles.*')
            ->get();
        
        $user->roles = $roles;
        
        return response()->json($user);
    }

    public function destroy($id)
    {
        try {
            \DB::beginTransaction();
            
            $user = User::findOrFail($id);
            
            // Delete profile photo if exists
            if ($user->profile_photo_path) {
                $photoPath = storage_path('app/public/' . $user->profile_photo_path);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            
            // Delete user roles
            \DB::table('user_roles')->where('user_id', $id)->delete();
            
            // Delete user permissions
            \DB::table('user_permissions')->where('user_id', $id)->delete();
            
            // Delete user
            $user->delete();
            
            \DB::commit();
            
            return response()->json(['message' => 'User deleted successfully']);
            
        } catch (\Exception $e) {
            \DB::rollback();
            return response()->json([
                'message' => 'Error deleting user: ' . $e->getMessage()
            ], 500);
        }
    }
}