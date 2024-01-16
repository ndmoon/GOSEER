<x-app-layout title="Create Owner">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Tambah Data Pemilik Kost
        </h2>

        <!-- Form to create owner -->
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
            <form action="{{ route('owners.store') }}" method="POST">
                @csrf
                <label class="block mb-4">
                    <span class="text-gray-700">Nama</span>
                    <input class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" type="text" name="nama" placeholder="Nama">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Email</span>
                    <input class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" type="email" name="email" placeholder="Email">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Alamat</span>
                    <input class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" type="text" name="alamat" placeholder="Alamat">
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Telepon</span>
                    <input class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" type="text" name="telepon" placeholder="Telepon">
                </label>

                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>
