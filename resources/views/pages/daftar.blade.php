@extends('layouts.app')

@section('content')
    <div class="space-y-5">

        <div class="w-full max-w-[800px]">
            <h3 class="font-semibold text-gray-800 text-lg dark:text-white/90 sm:text-xl">
                Daftar Aset Gudang
            </h3>
        </div>

        <div
            class="border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] sm:p-6 shadow-theme-xs rounded-xl">

            {{-- header card-start --}}
            <div class="w-full flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between max-w-full pb-5">
                <div class="space-y-1">
                    <h3 class="font-bold text-gray-900 text-xl dark:text-white tracking-tight">
                        List Gudang
                    </h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        Pantau seluruh logistik dan aset operasional internal perusahaan secara real-time.
                    </p>
                </div>

                <div class="flex items-center gap-2.5 sm:mt-0">
                    <button type="button"
                        class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700/50 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Export Data
                    </button>

                    <button type="button"
                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-theme-xs hover:bg-blue-700 dark:bg-blue-600 dark:hover:bg-blue-700 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Tambah Aset
                    </button>
                </div>
            </div>
            {{-- header card-end --}}

            {{-- line --}}
            <div class="-mx-5 sm:-mx-6 border-b border-gray-200 dark:border-gray-800 mb-6"></div>
            {{-- line --}}

            {{-- search list-start --}}
            <div class="w-full flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between max-w-full pb-5">

                <div class="w-full sm:w-auto relative">
                    <span class="absolute -translate-y-1/2 pointer-events-none left-4 top-1/2">
                        <svg class="fill-gray-500 dark:fill-gray-400" width="18" height="18" viewBox="0 0 20 20"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.04175 9.37363C3.04175 5.87693 5.87711 3.04199 9.37508 3.04199C12.8731 3.04199 15.7084 5.87693 15.7084 9.37363C15.7084 12.8703 12.8731 15.7053 9.37508 15.7053C5.87711 15.7053 3.04175 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM9.37508 1.54199C5.04902 1.54199 1.54175 5.04817 1.54175 9.37363C1.54175 13.6991 5.04902 17.2053 9.37508 17.2053C11.2674 17.2053 13.003 16.5344 14.357 15.4176L17.177 18.238C17.4699 18.5309 17.9448 18.5309 18.2377 18.238C18.5306 17.9451 18.5306 17.4703 18.2377 17.1774L15.418 14.3573C16.5365 13.0033 17.2084 11.2669 17.2084 9.37363C17.2084 5.04817 13.7011 1.54199 9.37508 1.54199Z" />
                        </svg>
                    </span>

                    <input type="text" placeholder="Cari nama barang atau kode serial..."
                        onkeydown="if(event.key === 'Enter') event.preventDefault();"
                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 pl-11 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 dark:border-gray-800 dark:bg-white/3 dark:text-white/90 dark:placeholder:text-white/30 sm:w-[320px] focus:border-blue-500 focus:ring-2 focus:ring-blue-100 focus:outline-none cursor-text" />
                </div>

                <button type="button"
                    class="inline-flex items-center justify-center gap-2 h-11 rounded-lg border border-gray-300 bg-white px-5 py-3 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700/50 transition-colors w-full sm:w-auto">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                        </path>
                    </svg>
                    Filter
                </button>
            </div>
            {{-- search list-end --}}

            {{-- line --}}
            <div class="-mx-5 sm:-mx-6 border-b border-gray-200 dark:border-gray-800"></div>
            {{-- line --}}

            {{-- table content-start --}}
            <div class="-mx-5 sm:-mx-6 max-w-full overflow-x-auto">
                <table class="w-full min-w-full border-collapse text-left text-sm whitespace-nowrap">
                    <thead>
                        <tr
                            class="text-gray-500 dark:text-white text-xs border-b border-gray-200 dark:border-gray-800 font-normal bg-gray-50/50 dark:bg-gray-800/20">
                            <th class="pl-6 pr-4 py-4 text-center w-16 font-normal">No</th>

                            <th class="px-9 py-4 font-normal">Nama Barang</th>
                            <th class="px-13 py-4 font-normal">Kode Serial</th>
                            <th class="px-15 py-4 font-normal">Kondisi</th>
                            <th class="px-2 py-4 text-center font-normal">Jumlah Stok</th>
                            <th class="px-19 py-4 text-right font-normal">Waktu Input</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-900 dark:text-gray-100 divide-y divide-gray-100 dark:divide-gray-800/50">
                        <tr
                            class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50/80 dark:hover:bg-white/[0.02] transition-colors">
                            <td class="pl-6 pr-4 py-4 text-center font-medium text-gray-500 dark:text-gray-400">1</td>

                            <td class="px-9 py-4 font-normal text-gray-900 dark:text-white">MacBook Pro M3</td>
                            <td class="px-13 py-4 font-mono text-xs text-gray-700 dark:text-gray-300">SN-MAC-001</td>
                            <td class="px-15 py-4">
                                <span
                                    class="inline-flex rounded-full text-xs font-semibold bg-green-50 text-green-700 dark:bg-green-500/10 dark:text-green-400">
                                    Baru
                                </span>
                            </td>
                            <td class="px-2 py-4 text-center font-normal text-gray-900 dark:text-white">5</td>
                            <td class="px-10.5 py-4 text-right text-xs text-gray-600 dark:text-gray-400 font-mono">
                                24-06-2026
                                10:30</td>

                            <td class="pl-4 pr-6 py-4 text-center">
                                <button type="button"
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/10 dark:hover:text-white transition-colors focus:outline-none">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 10a2 2 0 100 4 2 2 0 000-4zm-7 0a2 2 0 100 4 2 2 0 000-4zm14 0a2 2 0 100 4 2 2 0 000-4z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr
                            class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50/80 dark:hover:bg-white/[0.02] transition-colors">
                            <td class="pl-6 pr-4 py-4 text-center font-medium text-gray-500 dark:text-gray-400">2</td>

                            <td class="px-9 py-4 font-normal text-gray-900 dark:text-white">MacBook Pro M3</td>
                            <td class="px-13 py-4 font-mono text-xs text-gray-700 dark:text-gray-300">SN-MAC-001</td>
                            <td class="px-15 py-4">
                                <span
                                    class="inline-flex rounded-full text-xs font-semibold bg-amber-50 text-amber-700 dark:bg-amber-500/10 dark:text-amber-400">
                                    Bekas
                                </span>
                            </td>
                            <td class="px-2 py-4 text-center font-normal text-gray-900 dark:text-white">5</td>
                            <td class="px-10.5 py-4 text-right text-xs text-gray-600 dark:text-gray-400 font-mono">
                                24-06-2026
                                10:30</td>

                            <td class="pl-4 pr-6 py-4 text-center">
                                <button type="button"
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/10 dark:hover:text-white transition-colors focus:outline-none">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 10a2 2 0 100 4 2 2 0 000-4zm-7 0a2 2 0 100 4 2 2 0 000-4zm14 0a2 2 0 100 4 2 2 0 000-4z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- table content-end --}}

        </div>
    </div>
@endsection
