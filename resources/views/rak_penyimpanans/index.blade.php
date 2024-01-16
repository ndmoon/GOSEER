
<x-app-layout title="Daftar Rak Penyimpanan">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Daftar Rak Penyimpanan
        </h2>

        <div class="mb-6">
            <a href="{{ route('rak_penyimpanans.create') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700">
                Tambah Rak Penyimpanan
            </a>
        </div>

        <!-- Display a table of storage racks -->
        <table class="min-w-full table-auto bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">No</th>
                    <th class="py-2 px-4 border">Nama Rak</th>
                    <th class="py-2 px-4 border">Lokasi</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rakPenyimpanans as $rakPenyimpanan)
                    <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border">{{ $rakPenyimpanan->nama_rak }}</td>
                        <td class="py-2 px-4 border">{{ $rakPenyimpanan->lokasi }}</td>
                        <td class="py-2 px-4 border">
                            <a href="{{ route('rak_penyimpanan.edit', $rakPenyimpanan->id) }}" class="text-green-600 hover:text-green-900">Edit</a>
                            <form action="{{ route('rak_penyimpanan.destroy', $rakPenyimpanan->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus rak penyimpanan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
