<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidate;
use App\Models\Party;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Carlos Villatoro',
            'dpi' => '2899053450101',
            'email' => 'carlos@villatoro.dev',
            'password' => bcrypt('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Tavo',
            'dpi' => '9076073450101',
            'email' => 'gcastilloo1@miumg.edu.gt',
            'password' => bcrypt('admin123'),
        ]);

        User::factory(10)->create();

        Storage::deleteDirectory('partidos');
        Storage::makeDirectory('partidos');
        $this->call(PartySeeder::class);
    }
}
