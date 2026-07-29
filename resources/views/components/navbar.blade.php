<div x-data="{ atTop: true }"
    @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)">

    <div :class="{ 'h-0 opacity-0 overflow-hidden': !atTop, 'h-12 opacity-100': atTop }"
        class="transition-all duration-500 bg-gradient-to-r from-blue-400 via-blue-600 to-blue-800 text-white flex items-center px-4 md:px-10 overflow-hidden">

        <div class="flex items-center justify-between w-full max-w-screen-xl mx-auto">

            <div class="flex items-center gap-2 md:gap-4">
                {{-- Tombol IGD --}}
                <a href="tel:0285123456"
                    class="cursor-pointer flex text-[10px] md:text-sm lg:text-xs items-center gap-2 px-3 py-1.5 rounded-full bg-red-500 hover:bg-red-600 active:scale-95 transition-all duration-200 shadow-sm">
                    <i class="ri-phone-fill"></i>
                    <span class="tracking-wide">IGD: <span class="font-bold">(0285) 785909</span> | <i class="ri-clock-line"></i> 24 Jam</span>
                </a>

                {{-- Informasi & Pendaftaran --}}
                <a href="https://wa.me/6285640009934" class="cursor-pointer hidden text-[10px] md:text-sm lg:text-xs sm:flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-600 hover:bg-green-900/80 transition-all cursor-default border border-white/10">
                    <i class="ri-information-line text-white-300"></i>
                    Pendaftaran: <span class="font-extrabold">0856-4000-9934</span>
                </a>
            </div>

            <div class="flex items-center gap-2 md:gap-3 ">
                <span class="hidden lg:inline text-white/70 text-[11px] uppercase tracking-widest mr-2">Hubungi Kami:</span>
                <a href="https://wa.me/6285640009934" target="_blank"
                    class="flex items-center justify-center md:w-8 md:h-8 h-6 w-6 rounded-full bg-green-500 hover:bg-green-400 hover:scale-110 transition-all duration-500 shadow-lg "
                    title="WhatsApp">
                    <i class="ri-whatsapp-line text-sm md:text-lg"></i>
                </a>
                <a href="https://www.instagram.com/rsia_aisyiyah_pekajangan/" target="_blank"
                    class="flex items-center justify-center md:w-8 md:h-8 h-6 w-6 rounded-full bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-600 hover:scale-110 transition-transform"
                    title="Instagram">
                    <i class="ri-instagram-line text-sm md:text-lg"></i>
                </a>
                <a href="https://www.facebook.com/RSIA.AISYIYAH.PEKAJANGAN" target="_blank"
                    class="flex items-center justify-center md:w-8 md:h-8 h-6 w-6 rounded-full bg-blue-600 hover:bg-blue-500 hover:scale-110 transition-transform"
                    title="Facebook">
                    <i class="ri-facebook-fill text-sm md:text-lg"></i>
                </a>
            </div>
        </div>
    </div>
    <nav :class="{ 'shadow-md': !atTop }"
        class="sticky top-0 z-50 bg-white/70 backdrop-blur-md dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <a href="{{ route('index') }}" class="flex items-start space-x-3 rtl:space-x-reverse" wire:navigate>
                <img src="{{ asset('images/logo-rsia-2.png') }}"
                    class="hidden dark:inline h-7 md:h-10"
                    alt="RSIA Aisyiyah Pekajangan">

                <img src="{{ asset('images/logo-rsia-aisyiyah.png') }}"
                    class="dark:hidden h-7 md:h-10"
                    alt="RSIA Aisyiyah Pekajangan">

            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col md:flex-row md:items-center p-4 md:p-0 mt-4 md:mt-0 font-normal text-sm border md:border-0 border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse dark:bg-gray-800 md:dark:bg-transparent">
                    <li>
                        <x-navbar.dropdown>
                            <x-slot name="trigger">
                                <i class="ri-book-read-line"></i>
                                Profil
                            </x-slot>

                            <x-navbar.dropdown-link :href="route('profile.tentang-kami')">
                                Tentang Kami
                            </x-navbar.dropdown-link>
                            <x-navbar.dropdown-link :href="route('profile.struktur-organisasi')">
                                Stuktur Organisasi
                            </x-navbar.dropdown-link>
                            <x-navbar.dropdown-link :href="route('profile.akreditasi')">
                                Akreditasi
                            </x-navbar.dropdown-link>
                        </x-navbar.dropdown>
                    </li>
                    <li>
                        <x-navbar.dropdown>
                            <x-slot name="trigger">
                                <i class="ri-heart-2-line me-2"></i>
                                Layanan
                            </x-slot>
                            <x-navbar.dropdown-link :href="route('layanan.rawat-inap')">
                                Rawat Inap
                            </x-navbar.dropdown-link>
                            <x-navbar.dropdown-link :href="route('layanan.rawat-jalan')">
                                Rawat Jalan
                            </x-navbar.dropdown-link>
                            {{-- <x-navbar.dropdown-link :href="route('layanan.poliklinik')">
                                Poliklinik
                            </x-navbar.dropdown-link> --}}
                        </x-navbar.dropdown>
                    </li>
                    <li>
                        <x-navbar.nav-link :href="route('artikel')">
                            <i class="ri-book-line me-2"></i>Artikel</a>
                        </x-navbar.nav-link>
                    </li>
                    <li>
                        <x-navbar.nav-link :href="route('karir')">
                            <i class="ri-user-line me-2"></i>Karir</a>
                        </x-navbar.nav-link>
                    </li>


                </ul>
            </div>


        </div>
    </nav>
</div>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('#navbar-sticky a');
            const currentURL = window.location.href;



            links.forEach(link => {
                if (link.href === currentURL) {
                    link.classList.remove('text-gray-900', 'hover:bg-gray-100', 'md:hover:bg-transparent', 'md:hover:text-blue-700', 'dark:hover:bg-gray-700', 'dark:hover:text-white', 'md:dark:hover:bg-transparent', 'dark:border-gray-700', 'dark:text-white', 'md:dark:text-white');
                    link.classList.add('text-white', 'bg-blue-700', 'md:bg-transparent', 'md:dark:text-blue-500', 'md:text-blue-700', 'dark:text-blue-500', 'dark:bg-blue-700', 'md:dark:bg-transparent', 'rounded-2xl');
                }
            })

        })
    </script>
@endpush
