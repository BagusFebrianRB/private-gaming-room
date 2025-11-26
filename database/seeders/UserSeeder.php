<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gamingroom.com',
            'phone' => '08123456789',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        // Create test customer
        User::create([
            'name' => 'John Doe',
            'email' => 'customer@test.com',
            'phone' => '08198765432',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);
    }
}
