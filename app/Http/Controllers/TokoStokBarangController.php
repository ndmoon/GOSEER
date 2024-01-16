<?php

namespace App\Http\Controllers;

use App\Models\TokoStokBarang;
use App\Models\PemilikToko;
use App\Models\Barang;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;


class TokoStokBarangController extends Controller
{
    public function index()
    {
        $tokoStokBarangs = TokoStokBarang::with(['toko', 'barang'])->get();
        return view('toko_stok_barangs.index', compact('tokoStokBarangs'));
    }

    public function create()
    {
        $pemilikTokos = PemilikToko::all();
        $barangs = Barang::all();
        return view('toko_stok_barangs.create', compact('pemilikTokos', 'barangs'));
    }

    public function generatePDF()
    {
        // Ambil data pemilik kost
        $tokoStokBarangs = TokoStokBarang::all(); // Ganti dengan model dan query yang sesuai

        // Render view ke dalam HTML
        $html = view('toko_stok_barangs.pdf', compact('tokoStokBarangs'));

        // Konfigurasi PDF
        $options = new Options();
        $options->set('defaultFont', 'Arial');

        // Inisialisasi Dompdf dengan opsi
        $dompdf = new Dompdf($options);

        // Muat HTML ke dalam Dompdf
        $dompdf->loadHtml($html);

        // Proses rendering PDF
        $dompdf->render();

        // Kembalikan file PDF sebagai response
        return $dompdf->stream("tokoStokBarangs.pdf");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'pemilik_toko_id' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required',
        ]);

        $tokoStokBarang = new TokoStokBarang;
        $tokoStokBarang->nama_toko = $request->nama_toko;
        $tokoStokBarang->pemilik_toko_id = $request->pemilik_toko_id;
        $tokoStokBarang->barang_id = $request->barang_id;
        $tokoStokBarang->jumlah = $request->jumlah;
        $tokoStokBarang->save();

        return redirect()->route('toko_stok_barang.index')->with('success', 'Stok Toko Barang berhasil ditambahkan');
    }

    public function edit(TokoStokBarang $tokoStokBarang)
    {
        $pemilikTokos = PemilikToko::all();
        $barangs = Barang::all();
        return view('toko_stok_barangs.edit', compact('tokoStokBarang', 'pemilikTokos', 'barangs'));
    }

    public function update(Request $request, TokoStokBarang $tokoStokBarang)
    {
        $request->validate([
            'nama_toko' => 'required',
            'pemilik_toko_id' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required',
        ]);

        $tokoStokBarang->update([
            'nama_toko' => $request->nama_toko,
            'pemilik_toko_id' => $request->pemilik_toko_id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('toko_stok_barang.index')->with('success', 'Stok Toko Barang berhasil diperbarui');
    }

    public function destroy(TokoStokBarang $tokoStokBarang)
    {
        $tokoStokBarang->delete();

        return redirect()->route('toko_stok_barang.index')->with('success', 'Stok Toko Barang berhasil dihapus');
    }
}
