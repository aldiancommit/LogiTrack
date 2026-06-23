@php
    // Mengambil jalur URL saat ini untuk mendeteksi menu mana yang sedang aktif
    $currentPath = request()->path();
@endphp

<aside id="sidebar"
    class="fixed flex flex-col mt-0 top-0 px-5 left-0 bg-white dark:bg-gray-900 dark:border-gray-800 text-gray-900 h-screen transition-all duration-300 ease-in-out z-99999 border-r border-gray-200 w-[290px]"
    x-data="{
        isActive(path) {
            return window.location.pathname === path || '{{ $currentPath }}' === path.replace(/^\//, '');
        }
    }"
    :class="{
        'translate-x-0': $store.sidebar.isMobileOpen,
        '-translate-x-full xl:translate-x-0': !$store.sidebar.isMobileOpen
    }">
    
    <div class="pt-8 pb-7 flex justify-start">
        <a href="/">
            <img class="dark:hidden" src="/images/logo/logo.svg" alt="Logo" width="150" height="40" />
            <img class="hidden dark:block" src="/images/logo/logo-dark.svg" alt="Logo" width="150" height="40" />
        </a>
    </div>

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar flex-1">
        <nav class="mb-6">
            <div class="flex flex-col gap-4">
                
                <div>
                    <h2 class="mb-3 text-xs font-semibold uppercase flex leading-[20px] text-gray-400 justify-start">
                        <span>MENU UTAMA</span>
                    </h2>

                    <ul class="flex flex-col gap-1">
                        <li>
                            <a href="/" class="menu-item group justify-start w-full"
                                :class="isActive('/') ? 'menu-item-active' : 'menu-item-inactive'">
                                
                                <span :class="isActive('/') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                </span>

                                <span class="menu-item-text">
                                    Daftar Aset Gudang
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
</aside>
