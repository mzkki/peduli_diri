@extends('layouts.index')

@section('main')

<div class="main mt-4" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
    <form action="{{ route('histories.update', $history->id) }}" method="POST">
        @csrf
        @method('put')

        <input type="hidden" name="user_id" value="{{ $history->user->id }}">
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2">Tanggal</label>
            <input type="date" class="formel @error('tanggal') is-invalid @enderror form-control" name="tanggal" value="{{ old('tanggal', $history->tanggal) }}">
            @error('tanggal')
            <div class="invalid-feedback" style="margin-left: 160px">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="waktu" class="col-sm-2">Waktu</label>
            <input type="time" class="formel @error('waktu') is-invalid @enderror form-control" name="waktu" value="{{ old('waktu', $history->waktu) }}">
            @error('waktu')
            <div class="invalid-feedback" style="margin-left: 160px">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2">Lokasi</label>
            <input type="text" class="formel @error('lokasi') is-invalid @enderror form-control" name="lokasi" value="{{ old('lokasi', $history->lokasi) }}">
            @error('lokasi')
            <div class="invalid-feedback" style="margin-left: 160px">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="suhu" class="col-sm-2">Suhu</label>
            <input type="text" class="formel @error('suhu') is-invalid @enderror form-control" name="suhu" value="{{ old('suhu', $history->suhu) }}">
            @error('suhu')
            <div class="invalid-feedback" style="margin-left: 160px">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="nav justify-content-end mt-3 mb-4">
            <button class="btn" type="submit">Simpan</button>
        </div>
    </form>
</div>

@endsection
