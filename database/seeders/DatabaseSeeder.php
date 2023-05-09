<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'CArlos Villatoro',
            'email' => 'carlos@villatoro.dev',
            'password' => bcrypt('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Tavo',
            'email' => 'gcastilloo1@miumg.edu.gt',
            'password' => bcrypt('admin123'),
        ]);

        User::factory(10)->create();
    }
}
