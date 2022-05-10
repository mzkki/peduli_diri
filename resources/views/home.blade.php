@extends('layouts.index')

@section('main')
    <div class="main mt-4" style="height: 100%">
        Selamat Datang {{ $nama }} di Aplikasi Peduli Diri ini
    </div>
    <div class="nav justify-content-end mt-3">
        <a class="btn" href="#">Isi Catatan Perjalanan</a>
    </div>
@endsection