@extends('layouts.app')

@section('content')
    <div class="space-y-5">

        <div class="w-full max-w-[800px]">
            <h3 class="font-semibold text-gray-800 text-lg dark:text-white/90 sm:text-xl">
                Tambah Aset
            </h3>
        </div>

        <div
            class="border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] sm:p-6 shadow-theme-xs rounded-xl">

            {{-- header card-start --}}
            <div class="w-full flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between max-w-full pb-5">
                <div class="space-y-1">
                    <h3 class="font-bold text-gray-900 text-xl dark:text-white tracking-tight">
                        Deksripsi Aset
                    </h3>
                </div>
            </div>
            {{-- header card-end --}}

            {{-- line --}}
            <div class="-mx-5 sm:-mx-6 border-b border-gray-200 dark:border-gray-800 mb-6"></div>
            {{-- line --}}

            <form action="{{ route('pages.gudang.store') }}" method="POST" class="flex flex-col gap-5">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-900 dark:text-white text-[14px]">
                            Nama Barang
                        </label>
                        <input type="text" name="nama_barang" placeholder="Masukkan nama barang..." required
                            value="{{ old('nama_barang') }}"
                            class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 px-4 text-sm text-gray-800 placeholder:text-gray-400 dark:border-gray-800 dark:bg-white/3 dark:text-white/90 dark:placeholder:text-white/30 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 focus:outline-none cursor-text" />
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-900 dark:text-white text-[14px]">
                            Kondisi Barang
                        </label>
                        <select name="kondisi" required value="{{ old('kondisi') }}"
                            class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 px-4 text-sm text-gray-800 dark:border-gray-800 dark:bg-white/3 dark:text-white/90 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 focus:outline-none appearance-none cursor-pointer">
                            <option value="bagus" class="dark:bg-gray-900">Bagus</option>
                            <option value="bekas" class="dark:bg-gray-900">Bekas</option>
                        </select>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-900 dark:text-white text-[14px]">
                            Kode Serial
                        </label>

                        <input type="text" name="kode_serial" placeholder="Contoh: SN-ROG89123..." required
                            value="{{ old('kode_serial') }}"
                            class="dark:bg-dark-900 h-11 w-full rounded-lg border bg-transparent py-2.5 px-4 text-sm text-gray-800 placeholder:text-gray-400 dark:bg-white/3 dark:text-white/90 dark:placeholder:text-white/30 focus:ring-2 focus:outline-none cursor-text
                            @error('kode_serial') border-red-500 focus:border-red-500 focus:ring-red-100 dark:border-red-500 
                            @else 
                            border-gray-200 dark:border-gray-800 focus:border-blue-500 focus:ring-blue-100 
                            @enderror" />

                        @error('kode_serial')
                            <span class="text-[11px] text-red-500 font-medium tracking-wide mt-0.2 px-3">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-900 dark:text-white text-[14px]">
                            Jumlah Stok
                        </label>
                        <input type="number" name="jumlah_stok" min="0" required value="{{ old('jumlah_stok', 0) }}"
                            class="dark:bg-dark-900 h-11 w-full rounded-lg border bg-transparent py-2.5 px-4 text-sm text-gray-800 placeholder:text-gray-400 dark:bg-white/3 dark:text-white/90 dark:placeholder:text-white/30 focus:ring-2 focus:outline-none cursor-text" />
                    </div>

                </div>

                <div class="mt-2 flex justify-end">
                    <button type="submit"
                        class="h-11 px-6 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 active:bg-blue-800 rounded-lg transition-colors shadow-theme-xs">
                        Simpan Aset
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
