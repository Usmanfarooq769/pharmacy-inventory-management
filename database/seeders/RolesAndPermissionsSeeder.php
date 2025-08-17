<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        Permission::firstOrCreate(['name'=>'manage users']);
        Permission::firstOrCreate(['name'=>'manage products']);

        $admin = Role::firstOrCreate(['name'=>'admin']);
        $admin->givePermissionTo(Permission::all());

        $userRole = Role::firstOrCreate(['name'=>'user']);
    }
}
