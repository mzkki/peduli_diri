@extends('layouts.index')

@section('main')
    <div class="base-filter d-flex flex-row bd-highlight mt-4 mb-2">
        <div class="bd-highlight">Urutkan Berdasarkan</div>
        <div class="mx-2 bd-highlight">
            <select name="filter" id="filter" class="filter">
                <option value="1">Tanggal</option>
                <option value="2">Waktu</option>
            </select>
        </div>
        <div class="mx-2 bd-highlight">
            <button class="btn-filter">Urutkan</button>
        </div>
    </div>
    <div class="main">
    </div>
@endsection