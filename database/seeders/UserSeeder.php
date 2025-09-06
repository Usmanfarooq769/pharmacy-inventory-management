<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $adminRole = Role::where('name', 'admin')->first();
        
        User::create([
            'name' => 'Admin User',
            'email' => 'shanusmanfarooq@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role_id' => $adminRole->id,
        ]);
    }
}
