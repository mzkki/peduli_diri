
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
        <button class="btn-filter" type="submit">Urutkan</button>
    </div>
</div>
<div class="main" style="padding: 50px">
    @if ($histories->count())    
    <table class="sortable">
        <tr>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Lokasi</th>
            <th>Suhu Tubuh</th>
        </tr>
        @foreach ($histories as $history)
        <tr class="item">
            <td>{{ $history->tanggal }}</td>
            <td>{{ $history->waktu }}</td>
            <td>{{ $history->lokasi }}</td>
            <td>{{ $history->suhu }}</td>
        </tr>
        @endforeach
    </table>
    @else
        <p>Data Tidak Ditemukan</p>
    @endif
    <div class="nav justify-content-end mt-3">
        <a class="btn" href="add">Isi Catatan Perjalanan</a>
    </div>
</div>
@endsection
