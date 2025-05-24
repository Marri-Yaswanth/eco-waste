<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Check if admin user exists, if not, create it
        if (User::where('email', 'admin@example.com')->doesntExist()) {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'), // Set your default password
                'email_verified_at' => now(),
                'is_admin' => true,  // Optional: if you have an "is_admin" column
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
