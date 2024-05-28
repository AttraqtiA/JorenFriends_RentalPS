<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function playstation()
    {
        return $this->belongsTo(Playstation::class, 'playstation_id', 'id');
    }

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'pengguna_id', 'id');
    }
}
