<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $permissions = [
            [
                'name' => 'permissions-create',
                'display_name' => 'Create Permission',
                'description' => 'Allows user to create permissions',
                'module' => 'Permissions',
            ],
            [
                'name' => 'permissions-edit',
                'display_name' => 'Edit Permission',
                'description' => 'Allows user to edit permissions',
                'module' => 'Permissions',
            ],
            [
                'name' => 'permissions-delete',
                'display_name' => 'Delete Permission',
                'description' => 'Allows user to delete permissions',
                'module' => 'Permissions',
            ],
        ];

        foreach ($permissions as $perm) {
            DB::table('permissions')->updateOrInsert(
                ['name' => $perm['name']], // check by unique name
                array_merge($perm, [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ])
            );
        }
    }
}
