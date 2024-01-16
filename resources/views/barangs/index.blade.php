
<x-app-layout title="Daftar Barang">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Daftar Barang
        </h2>

        <div class="mb-6">
            <a href="{{ route('barangs.create') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700">
                Tambah Barang
            </a>
        </div>

        <!-- Display a table of items -->
        <table class="min-w-full table-auto bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">No</th>
                    <th class="py-2 px-4 border">Nama Barang</th>
                    <th class="py-2 px-4 border">Supplier</th>
                    <th class="py-2 px-4 border">Harga</th>
                    <th class="py-2 px-4 border">Stok</th>
                    <th class="py-2 px-4 border">Rak Penyimpanan</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                    <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border">{{ $barang->nama_barang }}</td>
                        <td class="py-2 px-4 border">{{ $barang->supplier->nama_supplier }}</td>
                        <td class="py-2 px-4 border">{{ $barang->harga }}</td>
                        <td class="py-2 px-4 border">{{ $barang->stok }}</td>
                        <td class="py-2 px-4 border">{{ $barang->rakPenyimpanan->nama_rak }} - {{ $barang->rakPenyimpanan->lokasi }}</td>
                        <td class="py-2 px-4 border">
                            <a href="{{ route('barang.edit', $barang->id) }}" class="text-green-600 hover:text-green-900">Edit</a>
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        <div class="mt-3">
            <a href="{{ route('barangs.pdf') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700">
                Cetak PDF
            </a>
    </div>
    </div>
</x-app-layout>
