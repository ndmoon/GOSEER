<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Models\RakPenyimpanan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('supplier')->get();
        $barangs = Barang::with('rakPenyimpanan')->get();
        return view('barangs.index', compact('barangs'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        $rakPenyimpanans = RakPenyimpanan::all();
        return view('barangs.create', compact('suppliers','rakPenyimpanans'));
    }
    public function generatePDF()
    {
        // Ambil data pemilik kost
        $barangs = Barang::all(); // Ganti dengan model dan query yang sesuai

        // Render view ke dalam HTML
        $html = view('barangs.pdf', compact('barangs'));

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
        return $dompdf->stream("barangs.pdf");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'supplier_id' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'rak_penyimpanan_id' => 'required',
            	
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit(Barang $barang)
    {
        $suppliers = Supplier::all();
        $rakPenyimpanans = RakPenyimpanan::all();
        return view('barangs.create', compact('suppliers','rakPenyimpanans'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'supplier_id' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'rak_penyimpanan_id' => 'required',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}
