<x-app-layout title="Tambah Barang Baru">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Tambah Barang Baru
        </h2>

        <!-- Form to create item -->
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <label class="block mb-4">
                    <span class="text-gray-700">Nama Barang</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="nama_barang" placeholder="Nama Barang">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Supplier</span>
                    <select class="form-select block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green" name="supplier_id" required>
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Harga</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="number" name="harga" placeholder="Harga">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Stok</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="number" name="stok" placeholder="Stok">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Rak Penyimpanan</span>
                    <select class="form-select block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green" name="rak_penyimpanan_id" required>
                        @foreach ($rakPenyimpanans as $rakPenyimpanan)
                        <option value="{{ $rakPenyimpanan->id }}">{{ $rakPenyimpanan->nama_rak }} - {{ $rakPenyimpanan->lokasi }}</option>
                        @endforeach
                    </select>
                </label>

                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>