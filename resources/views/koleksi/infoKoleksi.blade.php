<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Info Koleksi') }}
            </h2>
            <div class="text-white">
                <a href="{{ route('user.registrasi') }}">Registrasi</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Koleksi
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$collection->namaKoleksi }}
                                    </td>
                                </tr>
                                <tr>
                                <th scope="col" class="px-6 py-3">
                                        Jenis Koleksi
                                    </th>
                                    <td class="px-6 py-4">
                                        @if ($collection->jenisKoleksi == 0)
                                        <span>Buku</span>
                                    @elseif ($collection->jenisKoleksi == 1)
                                        <span>Majalah</span>
                                    @elseif ($collection->jenisKoleksi == 2)
                                        <span>Cakram Digital</span>
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Koleksi
                                </th>
                                <td class="px-6 py-4">
                                    {{ $collection->jumlahKoleksi }}
                                </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

// Rizqy Nurfauzella 6706223074 D3 IF 46-04 //
