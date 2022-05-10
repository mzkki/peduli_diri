@extends('auth.index')

@section('auth')
<div class="position-absolute top-50 start-50 translate-middle">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="form-floating mb-3">
        <input type="number" class="form-control formlogin" id="floatingInput" placeholder="28282828" name="nik">
        <label for="floatingInput">NIK</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control formlogin" id="floatingPassword" placeholder="text" name="fullname">
        <label for="floatingPassword">Nama Lengkap</label>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="/register" class="btn">Saya Pengguna Baru</a>
        </div>
        <div class="col text-end">
            <button class="btn">Masuk</button>
        </div>
    </div>
</div>
@endsection
