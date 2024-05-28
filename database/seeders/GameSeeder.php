<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'genre_id' => 1,
            'image' => 'BishiBashi.jpg',
            'nama' => 'BishiBashi',
            'penerbit' => 'Konami',
            'tahunRilis' => 1996
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'Bully.jpg',
            'nama' => 'Bully',
            'penerbit' => 'Rockstar',
            'tahunRilis' => 2006
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'CrashTeamRacing.png',
            'nama' => 'Crash Team Racing',
            'penerbit' => 'Naugthy Dog',
            'tahunRilis' => 1999
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'DeathStanding.jpg',
            'nama' => 'Death Standing',
            'penerbit' => 'Kojima Productions',
            'tahunRilis' => 2019
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'DevilMayCry3.jpg',
            'nama' => "Devil May Cry 3: Dante's Awakening",
            'penerbit' => 'Capcom',
            'tahunRilis' => 2005
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'FinalFantasyVII.jpg',
            'nama' => 'Final Fantasy VII',
            'penerbit' => 'Square',
            'tahunRilis' => 1997
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'GhostofTsushima.jpg',
            'nama' => 'Ghost of Tsushima',
            'penerbit' => 'Sucker Punch Productions',
            'tahunRilis' => 2020
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'GTASA.jpg',
            'nama' => 'Grand Theft Auto: San Andreas',
            'penerbit' => 'Rockstar',
            'tahunRilis' => 2004
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'ResidentEvil4.jpg',
            'nama' => 'Resident Evil 4',
            'penerbit' => 'Capcom',
            'tahunRilis' => 2005
        ]);
        Game::create([
            'genre_id' => 1,
            'image' => 'TheLastOfUs.jpg',
            'nama' => 'The Last of Us',
            'penerbit' => 'Naughty Dog',
            'tahunRilis' => 2013
        ]);
    }
}
