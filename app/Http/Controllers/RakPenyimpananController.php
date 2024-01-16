<?php

namespace App\Http\Controllers;

use App\Models\RakPenyimpanan;
use Illuminate\Http\Request;

class RakPenyimpananController extends Controller
{
    public function index()
    {
        $rakPenyimpanans = RakPenyimpanan::all();
        return view('rak_penyimpanans.index', compact('rakPenyimpanans'));
    }

    public function create()
    {
        return view('rak_penyimpanans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_rak' => 'required',
            'lokasi' => 'required',
        ]);

        RakPenyimpanan::create($request->all());

        return redirect()->route('rak_penyimpanan.index')->with('success', 'Rak Penyimpanan berhasil ditambahkan');
    }

    public function edit(RakPenyimpanan $rakPenyimpanan)
    {
        return view('rak_penyimpanans.edit', compact('rakPenyimpanan'));
    }

    public function update(Request $request, RakPenyimpanan $rakPenyimpanan)
    {
        $request->validate([
            'nama_rak' => 'required',
            'lokasi' => 'required',
        ]);

        $rakPenyimpanan->update($request->all());

        return redirect()->route('rak_penyimpanan.index')->with('success', 'Rak Penyimpanan berhasil diperbarui');
    }

    public function destroy(RakPenyimpanan $rakPenyimpanan)
    {
        $rakPenyimpanan->delete();

        return redirect()->route('rak_penyimpanan.index')->with('success', 'Rak Penyimpanan berhasil dihapus');
    }
}
