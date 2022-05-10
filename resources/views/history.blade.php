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
        <table class="sortable">
            <tr>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Suhu Tubuh</th>
            </tr>
            <tr class="item">
                <td>13-09-2021</td>
                <td>08.00</td>
                <td>Toko Batu Hangat</td>
                <td>37,0</td>
            </tr>
            <tr class="item">
                <td>13-09-2021</td>
                <td>10.00</td>
                <td>Bulan Dept Store</td>
                <td>36,2</td>
            </tr>
            <tr class="item">
                <td>16-09-2021</td>
                <td>15.00</td>
                <td>Pagi Joging Area</td>
                <td>36,2</td>
            </tr>
        </table>
        <div class="nav justify-content-end mt-3">
            <a class="btn" href="#">Isi Catatan Perjalanan</a>
        </div>
    </div>
@endsection