<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use \App\Models\User;

use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index()
    {
        $permissions = Permission::pluck('name','id'); 
        $users = User::pluck('name','id'); 
        return view('roles.index', compact('permissions', 'users'));
    }

    public function getData(Request $request)
    {
        $query = User::with(['roles.permissions']); 

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('profile', function ($user) {
                $photo = $user->profile_photo_path 
                    ? asset('storage/'.$user->profile_photo_path) 
                    : asset('traderPanel/images/userpic.png'); 
                return '<img src="'.$photo.'" alt="'.$user->name.'" width="40" height="40" class="rounded-circle">';
            })
            ->addColumn('roles', function ($user) {
                return $user->roles->pluck('name')->implode(', ');
            })
            ->addColumn('permissions', function ($user) {
            
                return $user->roles->flatMap->permissions->pluck('name')->unique()->implode(', ');
            })
            ->addColumn('action', function ($user) {
                return '
                <button class="btn btn-sm btn-primary-light viewPermissions" data-id="'.$user->id.'">
                <i class="bi bi-eye"></i>
            </button>
                    <button class="btn btn-sm btn-success-light editUser" data-id="'.$user->id.'"><i class="bi bi-pencil-square"></i></button>
                    <button class="btn btn-sm btn-danger-light deleteUser" data-id="'.$user->id.'"><i class="bi bi-trash"></i></button>
                ';
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:100|unique:roles,name,' . $request->id,
            'display_name' => 'required|string|max:100',
            'description'  => 'nullable|string|max:255',
        ]);

        // Create or update role
        $role = Role::updateOrCreate(
            ['id' => $request->id],
            [
                'name'         => $request->name,
                'display_name' => $request->display_name,
                'description'  => $request->description,
            ]
        );

        // Sync relationships
        $role->permissions()->sync($request->permissions ?? []);
        $role->users()->sync($request->users ?? []);

        return response()->json([
            'success' => true,
            'message' => 'Role saved successfully',
            'data'    => $role->load(['permissions', 'users']),
        ]);
    }

    public function edit($id)
    {
        $role = Role::with(['permissions', 'users'])->findOrFail($id);
        return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,'.$id,
            'display_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'permissions' => 'array',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->display_name = $request->display_name; // ✅ required
        $role->description = $request->description;
        $role->save();

        if ($request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return response()->json(['success' => true, 'message' => 'Role updated successfully.']);
    }

    public function destroy($id)
    {
        try {
            \DB::beginTransaction();
            
            // Check if role is assigned to users
            $assigned = \DB::table('user_roles')->where('role_id', $id)->exists();
            if ($assigned) {
                return response()->json(['message' => 'Role assigned to users. Remove assignment first.'], 422);
            }
            
            // Delete role permissions
            \DB::table('role_permissions')->where('role_id', $id)->delete();
            
            // Delete the role
            Role::findOrFail($id)->delete();
            
            \DB::commit();
            
            return response()->json(['message' => 'Role deleted successfully']);
            
        } catch (\Exception $e) {
            \DB::rollback();
            return response()->json([
                'message' => 'Error deleting role: ' . $e->getMessage()
            ], 500);
        }
    }
}