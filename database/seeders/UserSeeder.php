<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'peran_id' => 1,
            'nama' => 'Samuel Miracle',
            'email' => 'samuelmiracle@gmail.com',
            'password' => bcrypt('manajer123')
        ]);

        User::create([
            'peran_id' => 2,
            'nama' => 'Louis Fernando',
            'email' => 'louisfernando@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Alice Johnson',
            'email' => 'alicejohnson@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Bob Smith',
            'email' => 'bobsmith@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Charlie Brown',
            'email' => 'charliebrown@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Diana Prince',
            'email' => 'dianaprince@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Edward Norton',
            'email' => 'edwardnorton@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Fiona Gallagher',
            'email' => 'fionagallagher@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'George Clooney',
            'email' => 'georgeclooney@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Hannah Montana',
            'email' => 'hannahmontana@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Ian Somerhalder',
            'email' => 'iansomerhalder@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Jack Sparrow',
            'email' => 'jacksparrow@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Karen Gillan',
            'email' => 'karengillan@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Leo Messi',
            'email' => 'leomessi@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Mila Kunis',
            'email' => 'milakunis@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Nathan Drake',
            'email' => 'nathandrake@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Olivia Wilde',
            'email' => 'oliviawilde@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Peter Parker',
            'email' => 'peterparker@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Quentin Tarantino',
            'email' => 'quentintarantino@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Rachel Green',
            'email' => 'rachelgreen@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Steve Rogers',
            'email' => 'steverogers@gmail.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'peran_id' => 3,
            'nama' => 'Tony Stark',
            'email' => 'tonystark@gmail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
