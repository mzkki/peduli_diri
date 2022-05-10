<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nik' => '6471040812040001',
            'fullname' => 'Haris Muzakki Indra'
        ]);

        User::create([
            'nik' => '6471040812040002',
            'fullname' => 'Alif Mulawarman'
        ]);

        User::create([
            'nik' => '6471020810040023',
            'fullname' => 'Muhammad Selli'
        ]);

        History::create([
            'user_id' => 1,
            'tanggal' => '13-09-2021',
            'waktu' => '08.00',
            'lokasi' => 'Toko Buku Hangat',
            'suhu' => '36,2'
        ]);
        History::create([
            'user_id' => 3,
            'tanggal' => '13-09-2021',
            'waktu' => '10.00',
            'lokasi' => 'Bulan Dept Store',
            'suhu' => '36,2'
        ]);
        History::create([
            'user_id' => 1,
            'tanggal' => '16-09-2021',
            'waktu' => '15.00',
            'lokasi' => 'Pagi Jogging Area',
            'suhu' => '37,0'
        ]);
        History::create([
            'user_id' => 2,
            'tanggal' => '14-09-2021',
            'waktu' => '11.00',
            'lokasi' => 'Kelapa Gading',
            'suhu' => '36,4'
        ]);
    }
}
