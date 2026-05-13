<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();

        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        Kendaraan::create($request->all());

        return redirect('/kendaraan');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);

        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);

        $kendaraan->update($request->all());

        return redirect('/kendaraan');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::find($id);

        $kendaraan->delete();

        return redirect('/kendaraan');
    }
}