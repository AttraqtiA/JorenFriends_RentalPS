<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaystationGame extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function playstation()
    {
        return $this->belongsTo(Playstation::class, 'playstation_id', 'id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }
}
