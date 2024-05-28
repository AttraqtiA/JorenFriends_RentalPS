<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['nama' => 'Action']);
        Genre::create(['nama' => 'Adventure']);
        Genre::create(['nama' => 'Role-Playing Game (RPG)']);
        Genre::create(['nama' => 'Simulation']);
        Genre::create(['nama' => 'Strategy']);
        Genre::create(['nama' => 'Sports']);
        Genre::create(['nama' => 'Puzzle']);
        Genre::create(['nama' => 'Idle Games (Clicker)']);
        Genre::create(['nama' => 'Horror']);
        Genre::create(['nama' => 'Music and Rhythm']);
        Genre::create(['nama' => 'Party']);
    }
}
