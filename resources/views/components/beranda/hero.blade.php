{{-- <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 mx-auto w-full">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 content-center">
        <div class="mx-auto max-w-screen-sm">
            <p class="mb-4 leading-10 font-extrabold tracking-tight leading-loose text-gray-900 text-4xl lg:text-6xl dark:text-white">Selamat Datang di <span class="text-green-600 dark:text-green-400">RSIA Aisyiyah Pekajangan</span></p>
            <p class="leading-relaxed transition-all font-normal text-gray-500 dark:text-white">Berawal dari semangat pengabdian Pimpinan Cabang Aisyiyah (PCA) Pekajangan, RSIA Aisyiyah Pekajangan lahir sebagai wujud nyata amal usaha untuk kesehatan masyarakat. Meski sempat mengalami dinamika pengelolaan yang melahirkan RSI PKU Muhammadiyah Pekajangan, semangat ibu-ibu PCA tidak pernah padam.

                Pada tahun 2002, perjuangan ini dibangkitkan kembali. Bermodalkan niat tulus serta dedikasi tenaga dan dana pribadi para pengurusnya, Rumah Bersalin ini terus tumbuh—mulai dari lokasi di Gang 19 hingga kini menetap di lokasi strategis Jl. Raya Pekajangan. Kini, dedikasi tersebut telah berbuah manis dengan bertransformasi menjadi RSIA Aisyiyah Pekajangan, yang siap melayani dengan hati.</p>
        </div>
    </div>
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 content-center">
        <div class="mx-auto max-w-screen-sm ">
            <img class="mx-auto mb-6 lg:mb-8 md:h-[400px]" src="{{ asset('images/rsia-aisyiyah-pekajangan.jpg') }}" alt="RSIA Aisyiyah Pekajangan">
        </div>
    </div>
</div> --}}


<section class="relative w-full min-h-[80vh] flex items-center justify-center overflow-hidden">

    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/rsia-aisyiyah-pekajangan.jpg') }}"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/50 to-transparent"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-12 grid lg:grid-cols-2 gap-10 items-center">

        <div class="text-white space-y-6 text-center md:text-left">

            <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                Selamat Datang di
                <span class="text-green-400 block">
                    RSIA Aisyiyah Pekajangan
                </span>
            </h1>

            <p class="text-base md:text-lg text-gray-200 leading-relaxed max-w-xl mx-auto md:mx-0">
                Berawal dari semangat pengabdian PCA Pekajangan,
                kami tumbuh menjadi rumah sakit ibu dan anak
                yang melayani dengan hati, profesional,
                dan penuh kepedulian.
            </p>

            <div class="flex flex-wrap gap-4 pt-4 justify-center md:justify-start">
                <a href="#layanan"
                    class="px-6 py-3 bg-green-600 hover:bg-green-700
                       rounded-lg text-white font-semibold
                       transition-all duration-300 hover:scale-105 shadow-lg">
                    Lihat Layanan
                </a>

                <a href="#tentang"
                    class="px-6 py-3 border border-white/70
                       rounded-lg text-white font-semibold
                       hover:bg-white hover:text-black
                       transition-all duration-300">
                    Tentang Kami
                </a>
            </div>

        </div>

    </div>


</section>
