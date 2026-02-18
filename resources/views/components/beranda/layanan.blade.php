<div class="container mx-auto w-full px-4 py-8">

    <h1 class="text-3xl md:text-5xl font-extrabold text-center 
               text-green-600 dark:text-green-400 mb-8">
        Layanan
    </h1>

    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 
                gap-4 md:gap-6">

        @foreach ($layanan as $value)
            <a href="#"
                class="group flex flex-col justify-center items-center 
                      h-full p-4 md:p-6
                      bg-white border border-gray-100 shadow-sm
                      transition-all duration-300 
                      hover:scale-105 hover:shadow-xl hover:z-10
                      dark:bg-gray-800 dark:border-gray-700
                      rounded-xl">

                {{-- Icon --}}
                <div class="text-3xl md:text-5xl mb-3 md:mb-4
                            text-green-600 transition-transform 
                            group-hover:rotate-6 
                            dark:text-green-400">

                    @php
                        $iconClass = $iconMap[$value['slug']] ?? 'ri-file-list-3-line';
                    @endphp

                    <i class="{{ $iconClass }}"></i>
                </div>

                {{-- Title --}}
                <h5 class="text-center text-sm md:text-lg 
                           font-bold uppercase tracking-tight 
                           text-green-500 dark:text-white">
                    {{ $value['name'] }}
                </h5>
                {{-- <p class="text-xs text-gray-500 dark:text-gray-200 text-center">Instalasi Gawat Darurat (IGD) RS Siti Khodijah dilengkapi dengan tenaga medis yang handal serta peralatan medis yang siap selama 24 jam untuk menangani kasus gawat darurat.</p> --}}

            </a>
        @endforeach

    </div>

</div>
<section class="relative overflow-hidden">

    {{-- Background Gradient (Day & Dark Consistent) --}}
    <div class="absolute inset-0 
                bg-gradient-to-br 
                from-green-50 via-green-100 to-green-200
                dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    </div>

    {{-- Image Background Right --}}
    <div class="absolute inset-0">
        <div class="absolute inset-0 
                    bg-gradient-to-r 
                    from-green-100/95 via-green-100/80 to-transparent
                    dark:from-gray-900/95 dark:via-gray-900/80 dark:to-transparent
                    z-10">
        </div>

        <img src="{{ asset('images/rsiap-mobile.png') }}"
            alt="RSIAP Mobile"
            class="absolute top-0 left-1/4 md:left-auto md:right-0 h-full w-auto 
            max-w-none object-contain 
            opacity-80 md:opacity-90 
            -translate-x-1/2 md:translate-x-0">
    </div>

    {{-- Content --}}
    <div class="relative z-20 container mx-auto 
                px-6 lg:px-16 
                py-20 lg:py-28">

        <div class="max-w-xl text-center lg:text-left">

            <h2 class="text-green-600 
                       dark:text-green-400
                       text-lg md:text-xl font-semibold mb-3">
                RSIAP Mobile
            </h2>

            <h1 class="text-3xl md:text-4xl lg:text-5xl 
                       font-extrabold leading-tight mb-6
                       text-green-800 
                       dark:text-white">
                Daftar Periksa Lebih Mudah & Cepat
            </h1>

            <p class="text-gray-700 
                      dark:text-gray-300
                      mb-8 text-sm md:text-base leading-relaxed">
                Dengan RSIAP Mobile, periksa jadwal dokter, buat janji,
                dan dapatkan estimasi antrian sebelum mengunjungi.
                Kemudahan pelayanan kesehatan kini ada di tangan Anda.
            </p>

            <a href="https://play.google.com/store/apps/details?id=com.rsiap.mobile&pcampaignid=web_share"
                target="_blank"
                class="inline-flex items-center 
                      bg-green-600 text-white
                      px-6 py-3 rounded-xl 
                      font-semibold shadow-lg
                      hover:bg-green-700
                      dark:bg-green-500 
                      dark:hover:bg-green-400
                      transition-all duration-300 
                      hover:scale-105">

                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                    alt="Google Play"
                    class="h-8 mr-3">

                Download Sekarang
            </a>

        </div>

    </div>

</section>
