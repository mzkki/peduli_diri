<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('history', [
            'title' => 'Catatan Perjalanan',
            'histories' => History::where('user_id', auth()->user()->id)->get()
        ]);
    }
}

// User::create(
//     [
//         'nik' => '6471040812040001',
//         'fullname' => 'Haris Muzakki Indra',
//     ]
// );

// History::create([
//     'user_id' => 1,
//     'tanggal' => '16-09-2021',
//     'waktu' => '15.00',
//     'lokasi' => 'Pagi Jogging Area',
//     'suhu' => '37,0'
// ]);
