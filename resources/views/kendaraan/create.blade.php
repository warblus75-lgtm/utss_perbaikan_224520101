@extends('layouts.master')

@section('content')

<h3>Tambah Kendaraan</h3>

<form action="/kendaraan/store" method="POST">
    @csrf

    <div class="mb-3">
        <label>Plat Nomor</label>
        <input type="text" name="plat_nomor" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama Pemilik</label>
        <input type="text" name="nama_pemilik" class="form-control">
    </div>

    <div class="mb-3">
        <label>Merk Kendaraan</label>
        <input type="text" name="merk_kendaraan" class="form-control">
    </div>

    <div class="mb-3">
        <label>Keluhan</label>
        <textarea name="keluhan" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">
        Simpan
    </button>
</form>

@endsection