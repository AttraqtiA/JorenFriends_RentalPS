<?php

namespace Database\Seeders;

use App\Models\Playstation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaystationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlayStation::create([
            'image' => 'PS1.jpg',
            'nama' => 'PlayStation 1',
            'harga' => 5000
        ]);

        PlayStation::create([
            'image' => 'PS2.jpg',
            'nama' => 'PlayStation 2',
            'harga' => 7000
        ]);

        PlayStation::create([
            'image' => 'PS3.jpg',
            'nama' => 'PlayStation 3',
            'harga' => 10000
        ]);

        PlayStation::create([
            'image' => 'PS4.jpg',
            'nama' => 'PlayStation 4',
            'harga' => 20000
        ]);

        PlayStation::create([
            'image' => 'PS5.png',
            'nama' => 'PlayStation 5',
            'harga' => 25000
        ]);
    }
}
