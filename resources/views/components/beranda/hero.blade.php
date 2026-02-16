


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
