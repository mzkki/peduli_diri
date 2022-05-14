@extends('layouts.index')

@section('main')

<div class="main mt-4" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
    <form action="{{ route('users.update', $user->nik) }}" method="POST">
        @csrf
        @method('put')

        <div class="mb-3 row">
            <label for="nik" class="col-sm-2">NIK</label>
            <input type="number" class="formel @error('nik') is-invalid @enderror form-control" name="nik" value="{{ old('nik', $user->nik) }}">
            @error('nik')
            <div class="invalid-feedback" style="margin-left: 160px">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="fullname" class="col-sm-2">Nama</label>
            <input type="text" class="formel @error('fullname') is-invalid @enderror form-control" name="fullname" value="{{ old('fullname', $user->fullname) }}">
            @error('fullname')
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
