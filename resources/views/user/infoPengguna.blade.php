<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
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
                                        Full Name
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->fullName }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Username
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->username }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Address
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->address }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Phone Number
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->phoneNumber }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Birthdate
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->birthDate }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Religion
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->agama }}
                                    </td>
                                </tr>
                                    <th scope="col" class="px-6 py-3">
                                        Gender
                                    </th>
                                    <td class="px-6 py-4">
                                    @if ($user->jenisKelamin == 0)
                                        <span>Pria</span>
                                    @else
                                        <span>Wanita</span>
                                    @endif
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
