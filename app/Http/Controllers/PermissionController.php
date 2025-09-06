<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;



class PermissionController extends Controller
{
    
 

   public function index()
    {
        return view('permissions.index');
    }

    public function getData(Request $request)
    {
        try {
            $permissions = Permission::select('id', 'name', 'display_name', 'description', 'module');

            return DataTables::of($permissions)
                ->addColumn('action', function ($row) {
                    $permissionData = htmlspecialchars(json_encode([
                        'id' => $row->id,
                        'name' => $row->name,
                        'display_name' => $row->display_name,
                        'description' => $row->description,
                        'module' => $row->module
                    ]), ENT_QUOTES, 'UTF-8');

                    return '
                        <div class="btn-group" role="group">
                            <button class="btn btn-sm btn-success-light editPerm me-1"
                                data-permission=\'' . $permissionData . '\'
                                title="Edit Permission">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger-light deletePerm"
                                data-id="' . $row->id . '"
                                title="Delete Permission">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>';
                })
                ->addColumn('formatted_display_name', fn($row) =>
                    $row->display_name ?: ucwords(str_replace(['-', '_'], ' ', $row->name))
                )
                ->addColumn('module_badge', fn($row) =>
                    '<span class="badge bg-primary-light">' . ucfirst($row->module ?: 'General') . '</span>'
                )
                ->rawColumns(['action', 'module_badge'])
                ->make(true);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to load permissions data: ' . $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    'regex:/^[a-z0-9-_]+$/',
                    Rule::unique('permissions', 'name')->ignore($request->permission_id)
                ],
                'display_name' => 'required|string|max:255',
                'description' => 'nullable|string|max:500',
                'module' => 'required|string|max:100',
            ];

            $messages = [
                'name.regex' => 'Permission name can only contain lowercase letters, numbers, hyphens, and underscores.',
                'name.unique' => 'Permission name already exists.',
            ];

            $request->validate($rules, $messages);

            DB::beginTransaction();

            $permissionData = $request->only(['name', 'display_name', 'description', 'module']);

            if ($request->permission_id) {
                $permission = Permission::findOrFail($request->permission_id);
                $permission->update($permissionData);
                $message = 'Permission updated successfully.';
            } else {
                Permission::create($permissionData);
                $message = 'Permission created successfully.';
            }

            DB::commit();

            return response()->json(['success' => true, 'message' => $message]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Failed to save permission: ' . $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $request->merge(['permission_id' => $id]);
        return $this->store($request);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $permission = Permission::findOrFail($id);

            $roleCount = $permission->roles()->count();
            $userCount = $permission->users()->count();

            if ($roleCount > 0 || $userCount > 0) {
                return response()->json([
                    'success' => false,
                    'message' => "Cannot delete permission. It is assigned to {$roleCount} role(s) and {$userCount} user(s)."
                ], 400);
            }

            $permission->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Permission deleted successfully.'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete permission: ' . $e->getMessage()
            ], 500);
        }
    }
}