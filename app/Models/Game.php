<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function playstationGame()
    {
        return $this->hasMany(PlaystationGame::class, 'game_id', 'id');
    }
}
