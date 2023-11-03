<!-- Rizqy Nurfauzella 6706223074 D3 IF 46-04 -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Koleksi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="border-collapse table-fixed w-full text-md">

                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Nama Koleksi</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                {{ $collection->nama}}
                            </td>
                        </tr>

                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Jenis Koleksi</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                @if ($collection->jenis == 1)
                                    <span>Buku</span>
                                @elseif ($collection->jenis == 2)
                                    <span>Majalah</span>
                                @else
                                    <span>Cakram Digital</span>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Jumlah Koleksi</th>
                            <td
                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                {{ $collection->jumlahSisa }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
