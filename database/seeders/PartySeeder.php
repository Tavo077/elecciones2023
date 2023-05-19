<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partidos = Party::factory(10)->create();

        foreach ($partidos as $party) {
            Image::factory(1)->create([
                'imageable_id' => $party->id,
                'imageable_type' => Party::class,
            ]);
        }
    }
}
