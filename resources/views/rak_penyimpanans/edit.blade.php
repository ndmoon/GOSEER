
<x-app-layout title="Edit Rak Penyimpanan">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Edit Rak Penyimpanan
        </h2>

        <!-- Form to edit storage rack -->
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('rak_penyimpanan.update', $rakPenyimpanan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="block mb-4">
                    <span class="text-gray-700">Nama Rak</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="nama_rak" value="{{ $rakPenyimpanan->nama_rak }}" placeholder="Nama Rak">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Lokasi</span>
                    <input class="block w-full mt-1 text-sm focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input" type="text" name="lokasi" value="{{ $rakPenyimpanan->lokasi }}" placeholder="Lokasi">
                </label>

                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>
