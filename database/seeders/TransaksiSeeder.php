<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaksi::create([
            'pengguna_id' => 3,
            'playstation_id' => 1,
            'tanggal' => '2024-05-01',
            'durasiBermain' => 2,
            'jumlahOrang' => 1,
        ]);

        Transaksi::create([
            'pengguna_id' => 4,
            'playstation_id' => 2,
            'tanggal' => '2024-05-01',
            'durasiBermain' => 3,
            'jumlahOrang' => 2,
        ]);

        Transaksi::create([
            'pengguna_id' => 5,
            'playstation_id' => 3,
            'tanggal' => '2024-05-01',
            'durasiBermain' => 1,
            'jumlahOrang' => 1,
        ]);

        Transaksi::create([
            'pengguna_id' => 6,
            'playstation_id' => 4,
            'tanggal' => '2024-05-01',
            'durasiBermain' => 4,
            'jumlahOrang' => 3,
        ]);

        Transaksi::create([
            'pengguna_id' => 7,
            'playstation_id' => 5,
            'tanggal' => '2024-05-01',
            'durasiBermain' => 2,
            'jumlahOrang' => 2,
        ]);

        Transaksi::create([
            'pengguna_id' => 8,
            'playstation_id' => 1,
            'tanggal' => '2024-05-02',
            'durasiBermain' => 3,
            'jumlahOrang' => 4,
        ]);

        Transaksi::create([
            'pengguna_id' => 9,
            'playstation_id' => 2,
            'tanggal' => '2024-05-02',
            'durasiBermain' => 1,
            'jumlahOrang' => 1,
        ]);

        Transaksi::create([
            'pengguna_id' => 10,
            'playstation_id' => 3,
            'tanggal' => '2024-05-02',
            'durasiBermain' => 2,
            'jumlahOrang' => 2,
        ]);

        Transaksi::create([
            'pengguna_id' => 11,
            'playstation_id' => 4,
            'tanggal' => '2024-05-02',
            'durasiBermain' => 4,
            'jumlahOrang' => 3,
        ]);

        Transaksi::create([
            'pengguna_id' => 12,
            'playstation_id' => 5,
            'tanggal' => '2024-05-02',
            'durasiBermain' => 1,
            'jumlahOrang' => 1,
        ]);

        Transaksi::create([
            'pengguna_id' => 13,
            'playstation_id' => 1,
            'tanggal' => '2024-05-03',
            'durasiBermain' => 3,
            'jumlahOrang' => 4,
        ]);

        Transaksi::create([
            'pengguna_id' => 14,
            'playstation_id' => 2,
            'tanggal' => '2024-05-03',
            'durasiBermain' => 2,
            'jumlahOrang' => 2,
        ]);

        Transaksi::create([
            'pengguna_id' => 15,
            'playstation_id' => 3,
            'tanggal' => '2024-05-03',
            'durasiBermain' => 4,
            'jumlahOrang' => 3,
        ]);

        Transaksi::create([
            'pengguna_id' => 16,
            'playstation_id' => 4,
            'tanggal' => '2024-05-03',
            'durasiBermain' => 1,
            'jumlahOrang' => 1,
        ]);

        Transaksi::create([
            'pengguna_id' => 17,
            'playstation_id' => 5,
            'tanggal' => '2024-05-03',
            'durasiBermain' => 2,
            'jumlahOrang' => 2,
        ]);

        Transaksi::create([
            'pengguna_id' => 18,
            'playstation_id' => 1,
            'tanggal' => '2024-05-04',
            'durasiBermain' => 3,
            'jumlahOrang' => 4,
        ]);

        Transaksi::create([
            'pengguna_id' => 19,
            'playstation_id' => 2,
            'tanggal' => '2024-05-04',
            'durasiBermain' => 1,
            'jumlahOrang' => 1,
        ]);

        Transaksi::create([
            'pengguna_id' => 20,
            'playstation_id' => 3,
            'tanggal' => '2024-05-04',
            'durasiBermain' => 4,
            'jumlahOrang' => 3,
        ]);

        Transaksi::create([
            'pengguna_id' => 21,
            'playstation_id' => 4,
            'tanggal' => '2024-05-04',
            'durasiBermain' => 2,
            'jumlahOrang' => 2,
        ]);

        Transaksi::create([
            'pengguna_id' => 22,
            'playstation_id' => 5,
            'tanggal' => '2024-05-04',
            'durasiBermain' => 3,
            'jumlahOrang' => 4,
        ]);
    }
}
