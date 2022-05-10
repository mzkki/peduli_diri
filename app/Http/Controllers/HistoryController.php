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
            'histories' => History::all()
        ]);
    }
}
