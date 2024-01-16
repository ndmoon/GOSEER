
<x-app-layout title="Daftar Pemilik Toko">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Daftar Pemilik Toko
        </h2>

        <div class="mb-6">
            <a href="{{ route('pemilik_tokos.create') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700">
                Tambah Pemilik Toko
            </a>
        </div>

        <!-- Display a table of store owners -->
        <table class="min-w-full table-auto bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">No</th>
                    <th class="py-2 px-4 border">Nama Pemilik</th>
                    <th class="py-2 px-4 border">Alamat</th>
                    <th class="py-2 px-4 border">Telepon</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilikTokos as $pemilikToko)
                    <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border">{{ $pemilikToko->nama_pemilik }}</td>
                        <td class="py-2 px-4 border">{{ $pemilikToko->alamat }}</td>
                        <td class="py-2 px-4 border">{{ $pemilikToko->telepon }}</td>
                        <td class="py-2 px-4 border">
                            <a href="{{ route('pemilik_toko.edit', $pemilikToko->id) }}" class="text-green-600 hover:text-green-900">Edit</a>
                            <form action="{{ route('pemilik_toko.destroy', $pemilikToko->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus pemilik toko ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
