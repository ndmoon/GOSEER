
<x-app-layout title="Daftar Toko">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Daftar Toko
        </h2>

        <div class="mb-6">
            <a href="{{ route('tokos.create') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md hover:bg-purple-700 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple active:bg-purple-700">
                Tambah Toko
            </a>
        </div>

        <!-- Display a table of stores -->
        <table class="min-w-full table-auto bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">No</th>
                    <th class="py-2 px-4 border">Nama Toko</th>
                    <th class="py-2 px-4 border">Alamat</th>
                    <th class="py-2 px-4 border">Pemilik Toko</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tokos as $toko)
                    <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border">{{ $toko->nama_toko }}</td>
                        <td class="py-2 px-4 border">{{ $toko->alamat }}</td>
                        <td class="py-2 px-4 border">{{ $toko->pemilikToko->nama_pemilik }}</td>
                        <td class="py-2 px-4 border">
                            <a href="{{ route('toko.edit', $toko->id) }}" class="text-purple-600 hover:text-purple-900">Edit</a>
                            <form action="{{ route('toko.destroy', $toko->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus toko ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            <a href="{{ route('barangs.pdf') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md hover:bg-purple-700 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple active:bg-purple-700">
                Cetak PDF
            </a>
    </div>
    </div>
</x-app-layout>
