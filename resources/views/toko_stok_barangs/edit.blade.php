<x-app-layout title="Tambah Stok Barang di Toko">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Tambah Stok Barang di Toko
        </h2>

        <!-- Form to create stock in store -->
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <form action="{{ route('toko_stok_barang.update', $toko_stok_barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="block mb-4">
                    <span class="text-gray-700">Nama Toko</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="nama_toko" placeholder="Nama Toko" required>
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Pemilik Toko</span>
                    <select class="form-select block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green" name="pemilik_toko_id" required>
                        @foreach ($pemilikTokos as $pemilikToko)
                        <option value="{{ $pemilikToko->id }}">{{ $pemilikToko->nama_pemilik_toko }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Barang</span>
                    <select class="form-select block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green" name="barang_id" required>
                        @foreach ($barangs as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Jumlah</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="jumlah" placeholder="Jumlah" required>
                </label>

                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>