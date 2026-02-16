<footer class="bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800">
    <div class="w-full overflow-hidden leading-[0] transform rotate-180 bg-gray-50 dark:bg-gray-800">
        <svg fill="currentColor" class="relative block w-full h-[50px] text-white dark:text-gray-900" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>

    <div class="mx-auto w-full max-w-screen-xl p-4 py-10 lg:py-16">
        <div class="md:flex md:justify-between gap-10">
            <div class="mb-8 md:mb-2 md:max-w-sm">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo-rsia-aisyiyah.png') }}"
                        class="h-12 block dark:hidden"
                        alt="Logo RSIA Aisyiyah">
                    <img src="{{ asset('images/logo-rsia-2.png') }}"
                        class="h-12 hidden dark:block"
                        alt="Logo RSIA Aisyiyah">
                </a>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6 mt-2">
                    Rumah Sakit Ibu dan Anak Aisyiyah Pekajangan melayani dengan hati, profesional, dan penuh kepedulian untuk kesehatan ibu dan buah hati tercinta.
                </p>
                <div class="space-y-3">
                    <div class="flex items-start gap-3 text-gray-600 dark:text-gray-400 text-sm">
                        <i class="ri-map-pin-2-fill text-green-600 text-lg"></i>
                        <span>Jl. Raya Pekajangan No. 610, Pekalongan, Jawa Tengah 51172</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-600 dark:text-gray-400 text-sm">
                        <i class="ri-phone-fill text-green-600 text-lg"></i>
                        <span>(0285) 785909 / 0812-3456-7890</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:gap-12 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase dark:text-white border-b-2 border-green-500 w-fit">Akses Cepat</h2>
                    <ul class="text-gray-600 dark:text-gray-400 font-medium space-y-4">
                        <li><a href="#" class="hover:text-green-600 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Layanan Medis</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Jadwal Dokter</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Artikel Kesehatan</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Karir</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase dark:text-white border-b-2 border-green-500 w-fit">Layanan Kami</h2>
                    <ul class="text-gray-600 dark:text-gray-400 font-medium space-y-4">
                        <li><a href="#" class="hover:text-green-600 transition">Poli Anak</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Poli Kandungan</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Persalinan</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">IGD 24 Jam</a></li>
                        <li><a href="#" class="hover:text-green-600 transition">Laboratorium</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase dark:text-white border-b-2 border-green-500 w-fit">Ikuti Kami</h2>
                    <div class="flex gap-4 mb-6">
                        <a href="#" class="text-gray-500 hover:text-green-600 dark:hover:text-white transition text-xl">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-green-600 dark:hover:text-white transition text-xl">
                            <i class="ri-facebook-box-line"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-green-600 dark:hover:text-white transition text-xl">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-green-600 dark:hover:text-white transition text-xl">
                            <i class="ri-youtube-line"></i>
                        </a>
                    </div>
                    <p class="text-xs text-gray-500 mb-2 italic">Terakreditasi Paripurna oleh:</p>
                    <img src="{{ asset('images/logo_larsi_paripurna.png') }}" class="h-10 opacity-70 grayscale hover:grayscale-0 transition" alt="KARS">
                </div>
            </div>
        </div>

        <hr class="my-8 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-10" />

        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © {{ date('Y') }} <a href="/" class="hover:underline font-semibold text-green-700">RSIA Aisyiyah Pekajangan</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0 text-xs text-gray-400">
                <a href="#" class="hover:text-gray-900 dark:hover:text-white text-xs">Syarat & Ketentuan</a>
                <a href="#" class="hover:text-gray-900 dark:hover:text-white text-xs">Kebijakan Privasi</a>
            </div>
        </div>
    </div>
</footer>
