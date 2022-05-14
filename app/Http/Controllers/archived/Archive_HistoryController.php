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

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required'
        ]);

        History::create([
            'user_id' => auth()->user()->id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu
        ]);

        return redirect()->to('/history');
    }
}
