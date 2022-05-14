@extends('layouts.index')

@section('main')

<div class="main mt-4" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
    <form action="{{ route('history.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control formel @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ $date }}" readonly>
                @error('tanggal')
                <div class="invalid-feedback" style="margin-left: 90px">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jam" class="col-sm-2">Jam</label>
            <div class="col-sm-10">
                <input type="time" class="form-control @error('waktu') is-invalid @enderror formel" id="jam" name="waktu" value="{{ $time }}" readonly>
                @error('waktu')
                <div class="invalid-feedback" style="margin-left: 90px">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror formel" id="lokasi" name="lokasi">
                @error('lokasi')
                <div class="invalid-feedback" style="margin-left: 90px">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="suhu" class="col-sm-2">Suhu</label>
            <div class="col-sm-10">
                <input type="number" class="form-control @error('suhu') is-invalid @enderror formel" id="suhu" name="suhu" step="0.1">
                @error('suhu')
                <div class="invalid-feedback" style="margin-left: 90px">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="nav justify-content-end mt-3 mb-4">
            <button class="btn" type="submit">Simpan</button>
        </div>
    </form>
</div>

@endsection
