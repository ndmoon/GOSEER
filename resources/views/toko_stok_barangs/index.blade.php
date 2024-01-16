
<x-app-layout title="Daftar Stok Barang di Toko">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Daftar Stok Barang di Toko
        </h2>

        <div class="mb-6">
            <a href="{{ route('toko_stok_barangs.create') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700">
                Tambah Toko Stok Barang
            </a>
        </div>

        <!-- Display a table of stock in stores -->
        <table class="min-w-full table-auto bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">No</th>
                    <th class="py-2 px-4 border">Toko</th>
                    <th class="py-2 px-4 border">Pemilik Toko</th>
                    <th class="py-2 px-4 border">Barang</th>
                    <th class="py-2 px-4 border">Jumlah</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tokoStokBarangs as $tokoStokBarang)
                    <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border">{{ $tokoStokBarang->nama_toko }}</td>
                        <td class="py-2 px-4 border">{{ $tokoStokBarang->toko->nama_pemilik }}</td>
                        <td class="py-2 px-4 border">{{ $tokoStokBarang->barang->nama_barang }}</td>
                        <td class="py-2 px-4 border">{{ $tokoStokBarang->jumlah }}</td>
                        <td class="py-2 px-4 border">
                            <a href="{{ route('toko_stok_barang.edit', $tokoStokBarang->id) }}" class="text-green-600 hover:text-green-900">Edit</a>
                            <form action="{{ route('toko_stok_barang.destroy', $tokoStokBarang->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus stok barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            <a href="{{ route('toko_stok_barangs.pdf') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700">
                Cetak PDF
            </a>
    </div>
    </div>
</x-app-layout>
