
<x-app-layout title="Edit Supplier">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Edit Supplier
        </h2>

        <!-- Form to edit supplier -->
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="block mb-4">
                    <span class="text-gray-700">Nama Supplier</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="nama_supplier" value="{{ $supplier->nama_supplier }}" placeholder="Nama Supplier">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Alamat</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="alamat" value="{{ $supplier->alamat }}" placeholder="Alamat">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Telepon</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="telepon" value="{{ $supplier->telepon }}" placeholder="Telepon">
                </label>

                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>
