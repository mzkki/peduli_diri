@extends('layouts.index')

@section('main')

<div class="main mt-4" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
  <div class="mb-3 row">
    <label for="tanggal" class="col-sm-2">Tanggal</label>
    <div class="col-sm-10">
      <input type="email" class="formel" id="tanggal">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jam" class="col-sm-2">Jam</label>
    <div class="col-sm-10">
      <input type="password" class="formel" id="jam">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="lokasi" class="col-sm-2">Lokasi</label>
    <div class="col-sm-10">
      <input type="password" class="formel" id="lokasi">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="suhu" class="col-sm-2">Suhu</label>
    <div class="col-sm-10">
      <input type="password" class="formel" id="suhu">
    </div>
  </div>
  
  <div class="nav justify-content-end mt-3 mb-4">
    <a class="btn" href="#">Simpan</a>
  </div>

</div>
    
@endsection