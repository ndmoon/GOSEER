<?php

namespace App\Http\Controllers;

use App\Models\PemilikToko;
use Illuminate\Http\Request;

class PemilikTokoController extends Controller
{
    public function index()
    {
        $pemilikTokos = PemilikToko::all();
        return view('pemilik_tokos.index', compact('pemilikTokos'));
    }

    public function create()
    {
        return view('pemilik_tokos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        PemilikToko::create($request->all());

        return redirect()->route('pemilik_toko.index')->with('success', 'Pemilik Toko berhasil ditambahkan');
    }

    public function edit(PemilikToko $pemilikToko)
    {
        return view('pemilik_tokos.edit', compact('pemilikToko'));
    }

    public function update(Request $request, PemilikToko $pemilikToko)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $pemilikToko->update($request->all());

        return redirect()->route('pemilik_toko.index')->with('success', 'Pemilik Toko berhasil diperbarui');
    }

    public function destroy(PemilikToko $pemilikToko)
    {
        $pemilikToko->delete();

        return redirect()->route('pemilik_toko.index')->with('success', 'Pemilik Toko berhasil dihapus');
    }
}

