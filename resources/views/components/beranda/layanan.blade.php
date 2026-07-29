<div class="container mx-auto w-full px-4 py-8">
    <h1 class="text-3xl md:text-5xl font-extrabold text-center text-blue-600 dark:text-blue-400 mb-2">
        Layanan
    </h1>
    <p
        class="text-center text-gray-600 dark:text-gray-400 text-sm md:text-lg max-w-2xl mx-auto mb-12 font-medium leading-relaxed">
        Dedikasi sepenuh hati untuk kenyamanan dan kesehatan keluarga Anda.
    </p>
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6">


            <div
                class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] shadow-2xl min-h-[400px] md:min-h-[600px]">
                <a href="{{ route('layanan.rawat-inap') }}" wire:navigate>
                    <img src="{{ asset('images/kamar-prioritas.webp') }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Kamar Inap">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-blue-800/70 to-blue-600/40">
                    </div>
                    <div class="relative h-full p-6 md:p-10 flex flex-col justify-between z-10">
                        <div>
                            <span
                                class="bg-blue-400/30 backdrop-blur-md border border-white/20 px-4 py-1.5 rounded-full text-xs font-semibold text-white tracking-widest uppercase">Rawat
                                Inap Eksklusif</span>
                            <h3 class="text-3xl md:text-4xl font-black text-white mt-6 leading-tight"> 1 Kamar <br> 1
                                Pasien</h3>
                            <p class="mt-4 text-blue-50/90 text-base md:text-lg max -w-sm leading-relaxed">Privasi
                                maksimal di semua kelas layanan untuk kenyamanan Anda.</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <button
                                class="bg-white text-blue-700 px-6 md:px-8 py-3 rounded-2xl font-bold hover:bg-blue-50 transition-all transform hover:-translate-y-1 shadow-lg">Lihat
                                Fasilitas</button>
                        </div>
                    </div>
                </a>
            </div>

            <div
                class="md:col-span-2 relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] border border-blue-100 dark:border-blue-800 shadow-xl min-h-[200px] bg-white dark:bg-gray-800">
                <img src="{{ asset('images/dokter-spesialis.webp') }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-all duration-700 group-hover:scale-110"
                    alt="Dokter">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-200/80 via-blue-100/20 to-transparent dark:from-gray-900 dark:via-gray-900/40">
                </div>
                <div class="relative p-6 md:p-8 h-full flex flex-col justify-between z-10">
                    <div
                        class="text-blue-600 dark:text-blue-400 bg-blue-50/80 dark:bg-gray-700/80 backdrop-blur-md w-fit p-3 rounded-2xl shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-extrabold text-blue-900 dark:text-blue-300">Poliklinik
                            Dokter Spesialis</h3>
                        <p class="text-blue-800/80 dark:text-blue-400/80 font-semibold text-sm">Konsultasi ahli standar
                            medis terbaik.</p>
                    </div>
                </div>
            </div>

            <div
                class="relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] bg-white dark:bg-gray-800 min-h-[200px] flex flex-col justify-between transition-all duration-500 shadow-xl border border-blue-100 dark:border-blue-800">
                <img src="{{ asset('images/ugd.webp') }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-all duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-100/80 via-white/10 to-transparent dark:from-gray-900 dark:via-gray-900/20">
                </div>
                <div class="relative p-6 z-10">
                    <div
                        class="text-blue-600 dark:text-blue-400 bg-white/80 dark:bg-gray-700/80 backdrop-blur-md w-fit p-3 rounded-2xl group-hover:bg-red-500 group-hover:text-white transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative p-6 z-10">
                    <h3 class="text-xl font-extrabold text-blue-900 dark:text-white">UGD 24 Jam</h3>
                    <p class="text-xs font-semibold text-blue-800/70 dark:text-blue-400/70">Cepat, tepat, dan tanggap.
                    </p>
                </div>
            </div>

            <div
                class="relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] bg-white dark:bg-gray-800 min-h-[200px] md:min-h-[300px] flex flex-col justify-between transition-all duration-500 shadow-xl border border-blue-100 dark:border-blue-800">
                <img src="{{ asset('images/farmasi.webp') }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-all duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-100/80 via-white/10 to-transparent dark:from-gray-900 dark:via-gray-900/20">
                </div>
                <div class="relative p-6 z-10">
                    <div
                        class="text-blue-600 dark:text-blue-400 bg-white/80 dark:bg-gray-700/80 backdrop-blur-md w-fit p-3 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10.184 4.47a4.47 4.47 0 116.32 6.33L9.182 18.122a4.47 4.47 0 01-6.32-6.33l7.322-7.322z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13.348 7.634l-3.164 3.164"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative p-6 z-10">
                    <h3 class="text-xl font-extrabold text-blue-900 dark:text-white">Farmasi</h3>
                    <p class="text-xs font-semibold text-blue-800/70 dark:text-blue-400/70">Layanan obat 24 jam.</p>
                </div>
            </div>

            <div
                class="md:col-span-2 relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] bg-white dark:bg-gray-800 min-h-[200px] md:min-h-[300px] flex flex-col justify-between transition-all duration-500 shadow-xl border border-blue-100 dark:border-blue-800">
                <img src="{{ asset('images/kamar-operasi.webp') }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-all duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-100/80 via-white/10 to-transparent dark:from-gray-900 dark:via-gray-900/20">
                </div>
                <div class="relative p-6 md:p-8 h-full flex flex-col justify-between z-10">
                    <div
                        class="text-blue-600 dark:text-blue-400 bg-white/80 dark:bg-gray-700/80 backdrop-blur-md w-fit p-3 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758L5 19m0-14l4.121 4.121">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-extrabold text-blue-900 dark:text-white">Kamar Operasi</h3>
                        <p class="text-sm font-semibold text-blue-800/70 dark:text-blue-400/70">Fasilitas bedah modern &
                            steril.</p>
                    </div>
                </div>
            </div>

            <div
                class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] shadow-2xl min-h-[500px] md:min-h-[600px] transition-all duration-500 hover:shadow-2xl border border-blue-100 dark:border-blue-800">
                <img src="{{ asset('images/kia-akta-bpjs.webp') }}"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                    alt="Layanan Kependudukan">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-blue-800/70 to-blue-600/40"></div>
                <div class="relative h-full p-6 md:p-10 flex flex-col justify-between z-10">
                    <div>
                        <span
                            class="bg-white/30 backdrop-blur-md border border-white/40 px-4 py-1.5 rounded-full text-xs font-bold text-white tracking-widest uppercase">Free
                            Complementary</span>
                        <h3 class="text-3xl md:text-4xl font-black text-white mt-6 leading-tight">Pulang Bawa Akta, <br>
                            KIA & BPJS Bayi</h3>
                        <p class="mt-4 text-blue-50 text-base md:text-lg max-w-sm leading-relaxed">
                            Layanan kepengurusan kependudukan <span
                                class="font-bold bg-white/20 px-1 rounded">GRATIS</span> untuk setiap bayi yang lahir di
                            RSIA Aisyiyah Pekajangan. Kami urus semuanya, Ayah & Bunda terima jadi.
                        </p>
                        <ul class="mt-6 space-y-2">
                            <li class="flex items-center gap-3 text-white font-medium text-sm md:text-base">
                                <div class="bg-white/20 p-1 rounded-full"><svg class="w-3 h-3 md:w-4 md:h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                Akta Kelahiran
                            </li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm md:text-base">
                                <div class="bg-white/20 p-1 rounded-full"><svg class="w-3 h-3 md:w-4 md:h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                Pembaharuan KK
                            </li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm md:text-base">
                                <div class="bg-white/20 p-1 rounded-full"><svg class="w-3 h-3 md:w-4 md:h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                KIA (Kartu Identitas Anak)
                            </li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm md:text-base">
                                <div class="bg-white/20 p-1 rounded-full"><svg class="w-3 h-3 md:w-4 md:h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg></div>
                                Pendaftaran BPJS Kesehatan Bayi
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center gap-4">
                        <button
                            class="bg-white text-blue-600 px-6 md:px-8 py-3 md:py-4 rounded-2xl font-black hover:bg-blue-50 transition-all transform hover:-translate-y-1 shadow-xl uppercase text-xs md:text-sm tracking-wider">Cek
                            Persyaratan</button>
                    </div>
                </div>
            </div>

            <div
                class="relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] bg-white dark:bg-gray-800 min-h-[200px] md:min-h-[300px] flex flex-col justify-between transition-all duration-500 shadow-xl border border-blue-100 dark:border-blue-800">
                <img src="{{ asset('images/lab.jpeg') }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-all duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-100/80 via-white/10 to-transparent dark:from-gray-900 dark:via-gray-900/20">
                </div>
                <div class="relative p-6 z-10">
                    <div
                        class="text-blue-600 dark:text-blue-400 bg-white/80 dark:bg-gray-700/80 backdrop-blur-md w-fit p-3 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="relative p-6 z-10">
                    <h3 class="text-xl font-extrabold text-blue-900 dark:text-white">Laboratorium</h3>
                    <p class="text-xs font-semibold text-blue-800/70 dark:text-blue-400/70">Akurat & Cepat.</p>
                </div>
            </div>

            <div
                class="relative group overflow-hidden rounded-[2rem] md:rounded-[3rem] bg-white dark:bg-gray-800 min-h-[200px] flex flex-col justify-between transition-all duration-500 shadow-xl border border-blue-100 dark:border-blue-800">
                <img src="{{ asset('images/radiologi.webp') }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-all duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-100/80 via-white/10 to-transparent dark:from-gray-900 dark:via-gray-900/20">
                </div>
                <div class="relative p-6 z-10">
                    <div
                        class="text-blue-600 dark:text-blue-400 bg-white/80 dark:bg-gray-700/80 backdrop-blur-md w-fit p-3 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative p-6 z-10">
                    <h3 class="text-xl font-extrabold text-blue-900 dark:text-white">Radiologi</h3>
                    <p class="text-xs font-semibold text-blue-800/70 dark:text-blue-400/70">Pencitraan Medis.</p>
                </div>
            </div>

        </div>
    </div>

    {{-- <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4
                gap-4 md:gap-6">
        @foreach ($layanan as $value)
        <a href="#" class="group flex flex-col justify-center items-center
                      h-full p-4 md:p-6
                      bg-white border border-gray-100 shadow-sm
                      transition-all duration-300
                      hover:scale-105 hover:shadow-xl hover:z-10
                      dark:bg-gray-800 dark:border-gray-700
                      rounded-xl">
            <div class="text-3xl md:text-5xl mb-3 md:mb-4
                            text-blue-600 transition-transform
                            group-hover:rotate-6
                            dark:text-blue-400">
                @php
                $iconClass = $iconMap[$value['slug']] ?? 'ri-file-list-3-line';
                @endphp

                <i class="{{ $iconClass }}"></i>
            </div>
            <h5 class="text-center text-sm md:text-lg
                           font-bold uppercase tracking-tight
                           text-blue-500 dark:text-white">
                {{ $value['name'] }}
            </h5>
        </a>
        @endforeach

    </div> --}}

</div>
<section
    class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-blue-100 to-blue-200 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">

    <!-- Background Overlay -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r
                    from-blue-100/95 via-blue-100/80 to-transparent
                    dark:from-gray-900/95 dark:via-gray-900/80 dark:to-transparent">
        </div>
    </div>

    <div class="relative z-20 container mx-auto px-6 lg:px-16 py-20 lg:py-28">

        <div class="grid lg:grid-cols-2 items-center gap-12">

            <!-- Content -->
            <div class="order-2 lg:order-1 text-center lg:text-left">

                <div class="inline-flex items-center rounded-full
                           bg-blue-900 text-blue-100
                           dark:bg-blue-900/40 dark:text-blue-300
                           px-4 py-1 text-sm font-medium mb-5">
                    Khusus Pasien Umum
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl
                           font-extrabold leading-tight
                           text-blue-900 dark:text-white mb-6">

                    Daftar Periksa Lebih Mudah & Cepat dengan

                    <span class="text-blue-600 dark:text-blue-400">
                        RSIAP Mobile
                    </span>

                </h1>

                <p class="text-gray-700 dark:text-gray-300
                          text-base leading-relaxed mb-8">

                    Dengan <strong>RSIAP Mobile</strong>, pasien umum dapat
                    melihat jadwal dokter, mendaftar secara online,
                    memperoleh estimasi antrean, serta menikmati kemudahan
                    layanan kesehatan langsung dari genggaman.

                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-4">

                    <a href="https://play.google.com/store/apps/details?id=com.rsiap.mobile&pcampaignid=web_share"
                        target="_blank"
                        class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition duration-300 hover:-translate-y-1">

                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                            class="h-8 mr-3" alt="Google Play">

                        Download di Google Play

                    </a>

                    <a href="https://apps.apple.com/us/app/rsiap-mobile/id6775685600" target="_blank"
                        class="inline-flex items-center bg-gray-900 hover:bg-black text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition duration-300 hover:-translate-y-1">

                        <img src="{{ asset('images/logo-app-store.svg') }}" class="h-8 mr-3" alt="App Store">

                        Download di App Store

                    </a>

                    <a href="https://appgallery.huawei.com/app/C118350405" target="_blank"
                        class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition duration-300 hover:-translate-y-1">

                        <img src="{{ asset('images/huawei-appgallery-badge-logo.svg') }}" class="h-8 mr-3"
                            alt="Huawei AppGallery">

                        Download di AppGallery

                    </a>

                </div>

            </div>

            <!-- Image -->
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">

                <div class="overflow-hidden p-4">
                    <img src="{{ asset('images/mockup-rsiap-mobile.webp') }}" alt="RSIAP Mobile" class="w-full max-w-xs md:max-w-md lg:max-w-lg h-auto object-contain
                           drop-shadow-2xl
                           transition-all duration-700
                           hover:scale-105 hover:-translate-y-2">
                </div>

            </div>

        </div>

    </div>

</section>
<section class="relative py-20 bg-slate-100 dark:bg-slate-950 overflow-hidden">

    <!-- Background Decoration -->
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 w-80 h-80 bg-emerald-400/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 lg:px-16">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Image -->
            <div class="order-2 lg:order-1 flex justify-center p-4">

                <img src="{{ asset('images/mockup-mobile-jkn.png') }}" alt="RSIAP Mobile" class="w-full max-w-xs md:max-w-md lg:max-w-lg h-auto object-contain
                                               drop-shadow-2xl
                                               transition-all duration-700
                                               hover:scale-105 hover:-translate-y-2">
            </div>

            <!-- Content -->
            <div class="order-1 lg:order-2">

                <span
                    class="inline-flex items-center rounded-full bg-blue-100 text-blue-700 px-4 py-1 text-sm font-semibold mb-5">
                    Khusus Peserta BPJS Kesehatan
                </span>

                <h2 class="text-3xl lg:text-5xl font-extrabold text-blue-900 dark:text-blue-100 leading-tight mb-6">
                    Gunakan Mobile JKN untuk Pelayanan Pasien BPJS Kesehatan
                </h2>

                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-8">

                    Bagi pasien yang menggunakan <strong>BPJS Kesehatan</strong>,
                    pendaftaran rawat jalan dilakukan melalui aplikasi
                    <strong>Mobile JKN</strong>.
                    Anda dapat mengambil antrean online, melihat jadwal pelayanan, serta mengakses berbagai
                    layanan BPJS secara praktis.

                </p>

                <!-- Button -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">

                    <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile&pcampaignid=web_share"
                        target="_blank"
                        class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white  text-base px-6 py-3 rounded-xl font-semibold shadow-lg transition duration-300 hover:-translate-y-1">

                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                            class="h-8 mr-3" alt="Google Play">

                        Download di Google Play

                    </a>

                    <a href="https://apps.apple.com/id/app/mobile-jkn/id1237601115" target="_blank"
                        class="inline-flex items-center bg-gray-900 hover:bg-black text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition duration-300 hover:-translate-y-1">

                        <img src="{{ asset('images/logo-app-store.svg') }}" class="h-8 mr-3" alt="App Store">

                        Download di App Store

                    </a>

                    <a href="https://appgallery.huawei.com/app/C101669291" target="_blank"
                        class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition duration-300 hover:-translate-y-1">

                        <img src="{{ asset('images/huawei-appgallery-badge-logo.svg') }}" class="h-8 mr-3"
                            alt="Huawei AppGallery">

                        Download di AppGallery

                    </a>

                </div>
            </div>

        </div>

    </div>

</section>