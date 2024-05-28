<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'playstation_id', 'id');
    }

    public function playstationGame()
    {
        return $this->hasMany(PlaystationGame::class, 'playstation_id', 'id');
    }
}
