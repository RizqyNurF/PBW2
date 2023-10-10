<x-guest-layout>
    <form method="POST" action="{{route("koleksi.store.daftarKoleksi") }}">
        @csrf
        <!-- Nama Kolekasi -->
        <div>
            <x-input-label for="namaKoleksi" :value="__('Nama Kolesi')" />
            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required
                autofocus autocomplete="namaKoleksi" />
            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
        </div>
        <!-- Jenis Koleksi -->
        <div class="mt-4">
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <select class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"  name="jenisKoleksi" id="jenisKoleksi">
                <option selected disable>Pilih Jenis Koleksi</option>
                <option value="0">Buku</option>
                <option value="1">Majalah</option>
                <option value="2">Cakram Digital</option>
            </select>
            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
        </div>
        <!-- Jumlah Koleksi -->
        <div>
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required
                autofocus autocomplete="jumlahKoleksi" />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Tambah') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

// Rizqy Nurfauzella 6706223074 D3 IF 46-04 //
