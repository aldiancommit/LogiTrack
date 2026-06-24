<aside id="sidebar"
    class="fixed flex flex-col mt-0 top-0 px-5 left-0 bg-white dark:bg-gray-900 dark:border-gray-800 text-gray-900 h-screen transition-all duration-300 ease-in-out z-99999 border-r border-gray-200 w-[290px]"
    x-data="{
        currentPath: window.location.pathname,
        isActive(path) {
            if (path === '/') {
                return this.currentPath === '/' || this.currentPath === '';
            }
            const cleanPath = path.replace(/^\//, '');
            return this.currentPath.includes(cleanPath);
        }
    }"
    :class="{
        'translate-x-0': $store.sidebar.isMobileOpen,
        '-translate-x-full xl:translate-x-0': !$store.sidebar.isMobileOpen
    }">

    <div class="pt-8 pb-7 flex justify-start items-center gap-3">
        <a href="/" class="flex items-center gap-3">
            <img class="dark:hidden" src="/images/logo/logo-icon.svg" alt="Logo" width="35" height="40" />
            <h2 class="text-xl font-semibold tracking-wider">
                LogiTrack
            </h2>
        </a>
    </div>

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar flex-1">
        <nav class="mb-6">
            <div class="flex flex-col gap-4">

                <div>
                    <h2 class="mb-2 text-xs font-semibold uppercase flex leading-[20px] text-gray-400 justify-start">
                        <span>MENU UTAMA</span>
                    </h2>
                    <ul class="flex flex-col gap-1">
                        <li>
                            <a href="{{ route('pages.dashboard') }}" class="menu-item group justify-start w-full"
                                :class="isActive('/') ? 'menu-item-active' : 'menu-item-inactive'">

                                <span :class="isActive('/') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h4a1 1 0 011 1v5a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v2a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 14a1 1 0 011-1h4a1 1 0 011 1v5a1 1 0 01-1 1H5a1 1 0 01-1-1v-5zM14 11a1 1 0 011-1h4a1 1 0 011 1v8a1 1 0 01-1 1h-4a1 1 0 01-1-1v-8z">
                                        </path>
                                    </svg>
                                </span>

                                <span class="menu-item-text">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li x-data="{
                            openAset: window.location.pathname === '{{ parse_url(route('pages.gudang.index'), PHP_URL_PATH) }}' || window.location.pathname === '/daftar-aset/create',
                            parentActive: window.location.pathname === '{{ parse_url(route('pages.gudang.index'), PHP_URL_PATH) }}' || window.location.pathname === '/daftar-aset/create'
                        }">

                            <button type="button" @click="openAset = !openAset; parentActive = true"
                                class="menu-item group justify-between w-full text-left transition-colors"
                                :class="parentActive ? 'menu-item-active' : 'menu-item-inactive'">

                                <div class="flex items-center gap-3">
                                    <span :class="parentActive ? 'menu-item-icon-active' : 'menu-item-icon-inactive'">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4">
                                            </path>
                                        </svg>
                                    </span>

                                    <span class="menu-item-text">
                                        Aset Gudang
                                    </span>
                                </div>

                                <svg class="w-4 h-4 transition-transform duration-200"
                                    :class="{
                                        'rotate-180': openAset,
                                        'text-brand-500 dark:text-brand-400': parentActive,
                                        'text-gray-400': !parentActive
                                    }"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <ul x-show="openAset" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                class="mt-1 flex flex-col gap-1 pl-9">

                                <li>
                                    <a href="{{ route('pages.gudang.index') }}"
                                        class="menu-item group justify-start w-full text-sm"
                                        :class="window.location
                                            .pathname === '{{ parse_url(route('pages.gudang.index'), PHP_URL_PATH) }}' ?
                                            'menu-item-active' :
                                            'menu-item-inactive'">
                                        <span class="menu-item-text">
                                            Daftar Aset
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/daftar-aset/create" class="menu-item group justify-start w-full text-sm"
                                        :class="window.location.pathname === '/daftar-aset/create' ?
                                            'menu-item-active' :
                                            'menu-item-inactive'">
                                        <span class="menu-item-text">
                                            Tambah Aset
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</aside>
