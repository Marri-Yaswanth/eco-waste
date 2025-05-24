<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // You can include test users if needed
        // \App\Models\User::factory(10)->create();

        // Optional: a single test user
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call your custom admin seeder
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
