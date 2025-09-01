<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index()
    {
        $permissions = Permission::pluck('name','id'); // for the create/edit modal
        return view('roles.index', compact('permissions'));
    }
    public function getData(Request $request)
    {
        $query = Role::with('permissions')->select('roles.*');
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('permissions', function ($role) {
                return $role->permissions->pluck('name')->implode(', ');
            })
            ->addColumn('action', function ($role) {
                return '
                  <button class="btn btn-sm btn-success-light editRole" data-id="'.$role->id.'"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-sm btn-danger-light deleteRole" data-id="'.$role->id.'"><i class="bi bi-trash"></i></button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $r)
    {
        $r->validate([
            'name' => 'required|string|max:100|unique:roles,name,' . ($r->id ?? 'NULL'),
        ]);

        // create or update role
        $role = Role::updateOrCreate(
            ['id' => $r->id],
            ['name' => $r->name, 'guard_name' => 'web']
        );

        // sync permissions if provided (array of permission ids or names)
        if ($r->has('permissions')) {
            $perms = Permission::whereIn('id', (array)$r->permissions)->pluck('name')->toArray();
            $role->syncPermissions($perms);
        } else {
            $role->syncPermissions([]); // remove all if none sent
        }

        return response()->json(['message' => 'Role saved']);
    }

    public function edit($id)
    {
        $role = Role::with('permissions')->findOrFail($id);
        return response()->json($role);
    }

    public function destroy($id)
    {
        // prevent deletion if assigned to users (optional)
        $assigned = \DB::table('model_has_roles')->where('role_id', $id)->exists();
        if ($assigned) {
            return response()->json(['message' => 'Role assigned to users. Remove assignment first.'], 422);
        }
        Role::findOrFail($id)->delete();
        return response()->json(['message' => 'Role deleted']);
    }
}
