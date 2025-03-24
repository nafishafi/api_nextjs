<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
        ]);

        User::factory()->create([
            'name' => 'Bob Smith',
            'email' => 'bob@example.com',
        ]);

        User::factory()->create([
            'name' => 'Charlie Davis',
            'email' => 'charlie@example.com',
        ]);
    }
}