<?php

namespace Database\Seeders;

use App\Models\Peran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peran::create([
            'nama' => 'Admin'
        ]);
        Peran::create([
            'nama' => 'Manajer'
        ]);
        Peran::create([
            'nama' => 'Pelanggan'
        ]);
    }
}
