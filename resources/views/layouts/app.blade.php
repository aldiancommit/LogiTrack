<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'LogiTrack' }} | Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Prevent layout shift/flash on page refresh -->
    <script>
        (function() {
            const isMinimized = localStorage.getItem('sidebar-minimized') === 'true';
            if (isMinimized && window.innerWidth >= 1280) {
                document.documentElement.classList.add('sidebar-minimized');
            }
        })();
    </script>
    <style>
        .sidebar-minimized #sidebar {
            width: 90px !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        .sidebar-minimized #sidebar .menu-item-text {
            display: none !important;
        }
        .sidebar-minimized #sidebar h2 span {
            display: none !important;
        }
        .sidebar-minimized #sidebar .pt-8 h2 {
            display: none !important;
        }
        .sidebar-minimized #sidebar .pt-8 {
            justify-content: center !important;
        }
        .sidebar-minimized #sidebar .menu-item {
            justify-content: center !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .sidebar-minimized #sidebar button > svg {
            display: none !important;
        }
        .sidebar-minimized #main-content {
            margin-left: 90px !important;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

    <!-- Preloader Start -->
    <div id="preloader" 
        class="fixed inset-0 z-[999999] bg-white dark:bg-gray-950 flex flex-col items-center justify-center gap-4 transition-opacity duration-300 ease-out">
        <div class="relative flex items-center justify-center">
            <div class="w-14 h-14 rounded-full border-[3px] border-gray-100 dark:border-gray-800/80"></div>
            <div class="absolute w-14 h-14 rounded-full border-[3px] border-transparent border-t-blue-600 dark:border-t-blue-500 animate-spin"></div>
            <img class="absolute" src="/images/logo/logo-icon.svg" alt="Logo" width="22" height="25" />
        </div>
        <span class="text-[10px] font-bold tracking-widest text-gray-400 dark:text-gray-500 uppercase animate-pulse select-none">
            Memuat LogiTrack...
        </span>
    </div>

    <script>
        (function() {
            function hidePreloader() {
                const preloader = document.getElementById('preloader');
                if (preloader && !preloader.classList.contains('opacity-0')) {
                    // Tambah delay 250ms agar efek transisi pemuatan terlihat tenang dan elegan
                    setTimeout(() => {
                        preloader.classList.add('opacity-0');
                        setTimeout(() => {
                            preloader.remove();
                        }, 300);
                    }, 250);
                }
            }
            window.addEventListener('load', hidePreloader);
            // Safety fallback: disesuaikan ke 1.25 detik karena adanya penambahan delay 250ms
            setTimeout(hidePreloader, 1250);
        })();
    </script>
    <!-- Preloader End -->

    <div class="min-h-screen xl:flex" x-data>
        <!-- Backdrop for mobile -->
        <div x-show="$store.sidebar.isMobileOpen" @click="$store.sidebar.toggleMobile()"
            class="fixed inset-0 z-9999 bg-gray-900/40 backdrop-blur-xs xl:hidden"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            style="display: none;">
        </div>

        @include('layouts.sidebar')

        <div id="main-content" class="flex-1" :class="$store.sidebar.isMinimized ? 'xl:ml-[90px]' : 'xl:ml-[290px]'">

            @include('layouts.app-header')

            <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6 lg:p-8">
                @yield('content')
            </div>

        </div>
    </div>

</body>

@stack('scripts')

</html>
