<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Tambah Paket Pekerjaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-4/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="{{ route('paket.store') }}" method="POST">
                    @csrf

                    <div class="w-md">
                          <label for="bidang" class="block text-sm font-bold">
                            Bidang
                          </label>
                          <input type="text" name="bidang" id="bidang" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                          <label for="paket" class="block text-sm font-bold mt-4">
                            Nama Paket Pekerjaan
                          </label>
                          <textarea id="paket" name="namaPaket" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder=""></textarea>

                          <label for="tahun" class="block text-sm font-bold mt-4">
                            Tahun Paket Pekerjaan
                          </label>
                          <input type="date" name="tahunPaket" id="tahun" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                          <label for="paket" class="block text-sm font-bold mt-4">
                            Nama Konsultan Pekerjaan
                          </label>
                          <input type="text" name="namaKonsultan" id="konsultan" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                          <label for="paparan" class="block text-sm font-bold mt-4">
                            Paparan
                          </label>
                          <select id="paparan" name="paparan" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Ada</option>
                            <option>Tidak Ada</option>
                          </select>

                          <button type="submit" class="inline-block justify-center mt-4 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                            Save
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>