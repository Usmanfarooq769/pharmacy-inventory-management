<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;


class PermissionController extends Controller
{
    
 public function index()
    {
        return view('permissions.index');
    }

    public function getData(Request $request)
    {
        $permissions = Permission::select('id', 'name', 'guard_name');

        return DataTables::of($permissions)
            ->addColumn('action', function ($row) {
                $permissionData = e(json_encode($row));
                return '
                    <button class="btn btn-sm btn-success-light editPerm" data-permission="'.$permissionData.'">
                        <i class="bi bi-pencil-square"></i> 
                    </button>
                    <button class="btn btn-sm btn-danger-light deletePerm" data-id="'.$row->id.'">
                        <i class="bi bi-trash"></i> 
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|unique:permissions,name,' . $request->permission_id,
            'guard_name' => 'required|string',
        ]);

        Permission::updateOrCreate(
            ['id' => $request->permission_id],
            ['name' => $request->name, 'guard_name' => $request->guard_name]
        );

        return response()->json(['message' => 'Permission saved successfully.']);
    }

    public function update(Request $request, $id)
{
    $request->merge(['permission_id' => $id]);
    return $this->store($request);
}


    public function destroy($id)
    {
        Permission::findOrFail($id)->delete();
        return response()->json(['message' => 'Permission deleted successfully.']);
    }
}