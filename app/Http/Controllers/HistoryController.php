<?php

namespace App\Http\Controllers;

use App\Models\History;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::where('user_id', auth()->user()->id);

        if (request('filter') == 'oldest') {
            $history->oldest();
        } elseif (request('filter') == 'latest') {
            $history->latest();
        }

        return view('user.history', [
            'title' => 'Catatan Perjalanan',
            'histories' => $history->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dt = Carbon::now()->timezone('Asia/Makassar');
        $date = $dt->format('Y-m-d');
        $time = $dt->format('H:i:s');
        return view('user.add', [
            'title' => 'Tambah Data Perjalanan',
            'date' => $date,
            'time' => $time
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        History::create($validatedData);

        return redirect()->to('/history');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
