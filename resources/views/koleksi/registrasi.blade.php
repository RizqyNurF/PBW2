<!-- Rizqy Nurfauzella 6706223074 D3 IF 46-04 -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrasi Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800 border-b border-gray-200">
                  <form method="POST" action="/koleksiStore">
                      @csrf

                      <!-- Judul -->
                      <div>
                          <x-input-label for="nama" :value="__('Judul')" />

                          <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />

                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>

                      <!-- Jenis -->

                            <div class="">
                                <x-input-label for="jenis" :value="__('Jenis Koleksi')" />
                                <select name="jenis"
                                    class="w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option disabled selected>Pilih Jenis Koleksi</option>
                                    <option value="1" {{ old('jenis') == '1' ? 'selected' : '' }}>
                                        Buku
                                    </option>
                                    <option value="2" {{ old('jenis') == '2' ? 'selected' : '' }}>
                                        Majalah
                                    </option>
                                    <option value="3" {{ old('jenis') == '3' ? 'selected' : '' }}>
                                        Cakram Digital
                                    </option>
                                </select>
                            </div>

                      <!-- Jumlah -->
                      <div>
                          <x-input-label for="jumlahAwal" :value="__('Jumlah')" />

                          <x-text-input id="jumlahAwal" class="block mt-1 w-full" type="number" name="jumlahAwal" :value="old('jumlahAwal')" min="1" required />

                          <x-input-error :messages="$errors->get('jumlahAwal')" class="mt-2" />
                      </div>

                      <div class="flex items-center justify-end mt-4">
                          <x-primary-button type="reset" class="ml-4">
                              {{ __('Reset') }}
                          </x-primary-button>

                          <x-primary-button class="ml-4">
                              {{ __('Tambah Koleksi') }}
                          </x-primary-button>
                      </div>
                  </form>

                </div>
            </div>
          </div>
    </div>
  </x-app-layout>
