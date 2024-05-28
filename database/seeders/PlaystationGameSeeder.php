<?php

namespace Database\Seeders;

use App\Models\PlaystationGame;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaystationGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlaystationGame::create([
            'game_id' => 1,
            'playstation_id' => 1
        ]);

        PlaystationGame::create([
            'game_id' => 5,
            'playstation_id' => 1
        ]);

        PlaystationGame::create([
            'game_id' => 6,
            'playstation_id' => 2
        ]);

        PlaystationGame::create([
            'game_id' => 7,
            'playstation_id' => 2
        ]);

        PlaystationGame::create([
            'game_id' => 8,
            'playstation_id' => 2
        ]);

        PlaystationGame::create([
            'game_id' => 1,
            'playstation_id' => 3
        ]);

        PlaystationGame::create([
            'game_id' => 2,
            'playstation_id' => 3
        ]);

        PlaystationGame::create([
            'game_id' => 4,
            'playstation_id' => 3
        ]);

        PlaystationGame::create([
            'game_id' => 9,
            'playstation_id' => 4
        ]);

        PlaystationGame::create([
            'game_id' => 10,
            'playstation_id' => 4
        ]);

        PlaystationGame::create([
            'game_id' => 1,
            'playstation_id' => 5
        ]);

        PlaystationGame::create([
            'game_id' => 2,
            'playstation_id' => 5
        ]);
    }
}
