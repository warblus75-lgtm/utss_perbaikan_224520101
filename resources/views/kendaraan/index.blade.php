@extends('layouts.master')

@section('content')

<h3 class="mb-3">Daftar Servis Kendaraan</h3>

<a href="/kendaraan/create" class="btn btn-primary mb-3">
    Tambah Kendaraan
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Plat Nomor</th>
            <th>Nama Pemilik</th>
            <th>Merk Kendaraan</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($kendaraan as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->plat_nomor }}</td>
            <td>{{ $k->nama_pemilik }}</td>
            <td>{{ $k->merk_kendaraan }}</td>
            <td>{{ $k->keluhan }}</td>

            <td>
                <a href="/kendaraan/edit/{{ $k->id }}"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <form action="/kendaraan/delete/{{ $k->id }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus kendaraan dari antrean?')">

                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection