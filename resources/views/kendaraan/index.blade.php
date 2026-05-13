@extends('layouts.master')

@section('content')

<h3>Daftar Servis Kendaraan</h3>

<a href="/kendaraan/create" class="btn btn-primary mb-3">
    Tambah Kendaraan
</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Plat</th>
        <th>Pemilik</th>
        <th>Merk</th>
        <th>Keluhan</th>
    </tr>

    @foreach($kendaraan as $k)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $k->plat_nomor }}</td>
        <td>{{ $k->nama_pemilik }}</td>
        <td>{{ $k->merk_kendaraan }}</td>
        <td>{{ $k->keluhan }}</td>
    </tr>
    @endforeach

</table>

@endsection