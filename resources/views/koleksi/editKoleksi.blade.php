<!-- Rizqy Nurfauzella 6706223074 D3 IF 46-04 -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800 border-b border-gray-800">
                  <form method="POST" action="{{ url('koleksiUpdate') }}">
                      @csrf
                      <div>
                          <x-input-label for="id" :value="__('ID Koleksi*')" />

                          <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" autocomplete="off" value="{{ $collection->id }}" readonly/>

                          <x-input-error :messages="$errors->get('id')" class="mt-2" />
                      </div>
                      <div>
                          <x-input-label for="nama" :value="__('Judul Koleksi*')" />

                          <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" autocomplete="off" value="{{ $collection->nama }}" readonly/>

                          <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                      </div>

                      <div>
                          <x-input-label for="jenis" :value="__('Jenis*')" />

                          <select name="jenis"
                            class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option disabled selected>Pilih Jenis </option>
                            <option value="1" {{ $collection->jenis == '1' ? 'selected' : '' }}>
                                Buku
                            </option>
                            <option value="2" {{ $collection->jenis == '2' ? 'selected' : '' }}>
                                Majalah
                            </option>
                            <option value="3" {{ $collection->jenis == '3' ? 'selected' : '' }}>
                                Cakram Digital
                            </option>
                        </select>

                          <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                      </div>

                      <div>
                          <x-input-label for="jumlahAwal" :value="__('Jumlah Awal*')" />

                          <x-text-input id="jumlahAwal" class="block mt-1 w-full" type="number" name="jumlahAwal" value="{{ $collection->jumlahAwal }}" readonly autocomplete="off" min="0"/>

                          <x-input-error :messages="$errors->get('jumlahAwal')" class="mt-2" />
                      </div>

                      <div>
                          <x-input-label for="jumlahSisa" :value="__('Jumlah Sisa*')" />

                          <x-text-input id="jumlahSisa" class="block mt-1 w-full" type="number" name="jumlahSisa" value="{{ old('nama', $collection->jumlahSisa) }}" autocomplete="off" min="0"/>

                          <x-input-error :messages="$errors->get('jumlahSisa')" class="mt-2" />
                      </div>

                      <div>
                          <x-input-label for="jumlahKeluar" :value="__('Jumlah Keluar*')" />

                          <x-text-input id="jumlahKeluar" class="block mt-1 w-full" type="number" name="jumlahKeluar" value="{{ old('nama', $collection->jumlahKeluar) }}" autocomplete="off" min="1"/>

                          <x-input-error :messages="$errors->get('jumlahKeluar')" class="mt-2" />
                      </div>

                      <div class="flex items-center justify-end mt-4">
                          <x-primary-button type="reset" class="ml-4">
                              {{ __('Reset') }}
                          </x-primary-button>

                          <x-primary-button class="ml-4">
                              {{ __('Ok') }}
                          </x-primary-button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
