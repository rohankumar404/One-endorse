<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@oneendorse.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create test users
        $roles = ['celebrity', 'brand', 'company'];
        foreach ($roles as $role) {
            User::create([
                'first_name' => ucfirst($role),
                'last_name' => 'Test',
                'email' => "{$role}@oneendorse.com",
                'password' => Hash::make('password'),
                'role' => $role,
            ]);
        }
    }
}