<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportSuppliers;
use App\Imports\SuppliersImport;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleUserController extends Controller
{
    public function index()
    {
        $roles = Role::pluck('name','id');
        return view('user_role.index', compact('roles'));
    }

	 public function getData(Request $request)
    {
        $query = User::with('roles')->select('users.*');
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('roles', function($u) {
                return $u->getRoleNames()->implode(', ');
            })
            ->addColumn('action', function($u) {
                return '<button class="btn btn-sm btn-success-light editUserRole" data-id="'.$u->id.'">Assign Role</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function editRole($id)
    {
        $user = User::findOrFail($id);
        $role = $user->roles->first(); // single-role assumption
        return response()->json(['user'=>$user, 'role_id' => $role ? $role->id : null]);
    }

    public function assignRole(Request $r, $id)
    {
        $r->validate(['role_id'=>'nullable|exists:roles,id']);
        $user = User::findOrFail($id);

        if ($r->role_id) {
            $role = Role::findOrFail($r->role_id);
            $user->syncRoles([$role->name]);     // spatie pivot
            $user->role_id = $role->id;          // denormalized column for quick tracking
        } else {
            $user->syncRoles([]);                // remove all roles
            $user->role_id = null;
        }

        $user->save();
        return response()->json(['message' => 'User role updated']);
    }
}
