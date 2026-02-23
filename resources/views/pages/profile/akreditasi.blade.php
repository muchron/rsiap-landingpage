@extends('app')

@section('content')
    <section class="relative py-16 overflow-hidden bg-gray-50 dark:bg-gray-800">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-gray-50 dark:bg-gray-950 transition-colors duration-700"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-white/50 via-green-50/30 to-gray-200/50 dark:from-green-950/20 dark:via-transparent dark:to-slate-950/50 transition-opacity"></div>
            <div class="absolute inset-0 opacity-10 dark:opacity-[0.15] pointer-events-none mix-blend-luminosity">
                <img src="{{ asset('images/akreditasi/tim-akreditasi.JPG') }}"
                    class="w-full h-full object-cover object-center grayscale scale-105"
                    alt="Background Tim">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-transparent to-gray-50/20 dark:from-gray-950 dark:via-transparent dark:to-gray-950/40"></div>
            </div>
            <div class="absolute inset-0 opacity-[0.2] dark:opacity-[0.05] mix-blend-overlay pointer-events-none"
                style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');">
            </div>
            <div class="absolute -top-32 -left-32 w-[400px] md:w-[800px] h-[400px] md:h-[800px] 
                bg-yellow-400/20 dark:bg-yellow-500/10 rounded-full blur-[100px] md:blur-[150px] animate-pulse"></div>
            <div class="absolute -bottom-32 -right-32 w-[350px] md:w-[700px] h-[350px] md:h-[700px] 
                bg-green-400/20 dark:bg-green-600/10 rounded-full blur-[100px] md:blur-[150px]"></div>
            <div class="hidden dark:block absolute inset-0 bg-gradient-to-b from-transparent via-gray-950/20 to-gray-950"></div>
        </div>

        <div class="container relative z-10 mx-auto px-4 max-w-5xl">
            <div class="text-center mb-4">
                <h1 class="flex flex-col mb-4 tracking-tight">
                    <span class="font-corinthia text-green-700 dark:text-green-400 leading-none -mb-2 md:-mb-4" style="font-size: clamp(2.5rem, 8vw, 4rem);">
                        Mutu & Keselamatan
                    </span>
                    <span class="text-3xl md:text-5xl font-black text-gray-900 dark:text-white uppercase tracking-tighter">
                        Status Akreditasi
                    </span>
                </h1>
                <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto uppercase text-xs font-bold tracking-[0.2em]">
                    Komitmen Kami Terhadap Standar Kesehatan Nasional
                </p>
            </div>

            <div class="relative group max-w-2xl mx-auto p-4 md:p-8">
                <div class="absolute inset-0 bg-yellow-500/10 blur-3xl rounded-full scale-75 pointer-events-none group-hover:bg-yellow-500/20 transition-all duration-700"></div>
                <div class="relative z-10 bg-white dark:bg-gray-900 p-3 rounded-[2rem] shadow-2xl border border-yellow-200/50 dark:border-yellow-700/30 overflow-hidden">
                    <img src="{{ asset('images/sertifikat-akreditasi.png') }}"
                        alt="Sertifikat Akreditasi RSIA Aisyiyah Pekajangan"
                        class="w-full h-auto rounded-2xl shadow-inner transition-transform duration-700 group-hover:scale-[1.02]">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-green-50 dark:bg-gray-800">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <h1 class="flex flex-col mb-4 tracking-tight">
                    <span class="font-corinthia text-green-700 dark:text-green-400 leading-none -mb-2 md:-mb-4" style="font-size: clamp(2.5rem, 8vw, 4rem);">
                        Khidmat Pelayanan
                    </span>
                    <span class="text-3xl md:text-5xl font-black text-gray-900 dark:text-white uppercase tracking-tighter">
                        Ikhtiar Menuju Paripurna
                    </span>
                </h1>
                <p class="text-gray-600 dark:text-gray-400 text-sm max-w-2xl mx-auto italic">
                    Rangkaian persiapan dan pelaksanaan akreditasi RSIA Aisyiyah Pekajangan untuk menjamin mutu pelayanan Paripurna.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl transform transition-transform duration-1000 hover:scale-105">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/akreditasi/presentasi-direktur.JPG') }}"loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 dark:brightness-[0.7] grayscale-[0.2]">
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl transform transition-transform duration-1000 hover:scale-105">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/akreditasi/akreditasi-2.JPG') }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 dark:brightness-[0.7] grayscale-[0.2]">
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl transform transition-transform duration-1000 hover:scale-105">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/akreditasi/akreditasi-3.JPG') }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 dark:brightness-[0.7] grayscale-[0.2]">
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl transform transition-transform duration-1000 hover:scale-105">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/akreditasi/akreditasi-8.JPG') }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 dark:brightness-[0.7] grayscale-[0.2]">
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl transform transition-transform duration-1000 hover:scale-105">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/akreditasi/akreditasi-1.JPG') }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 dark:brightness-[0.7] grayscale-[0.2]">
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-white shadow-xl transform transition-transform duration-1000 hover:scale-105">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/akreditasi/tim-akreditasi.JPG') }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 dark:brightness-[0.7] grayscale-[0.2]">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white dark:bg-gray-950 transition-colors duration-500">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-[10px] font-black uppercase tracking-widest">
                        <i class="ri-shield-star-line"></i> Terakreditasi LARSI
                    </div>
                    <h3 class="text-3xl font-black text-green-600 dark:text-green-400 uppercase leading-none ">
                        Standar Tertinggi Untuk Keluarga Anda
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Akreditasi Paripurna merupakan pengakuan tertinggi yang diberikan oleh Lembaga Akreditasi Rumah Sakit Indonesia (LARSI) atas kepatuhan rumah sakit terhadap standar pelayanan dan keselamatan pasien. Pencapaian ini adalah bukti dedikasi seluruh staf RSIA Aisyiyah Pekajangan dalam memberikan layanan yang aman, bermutu, dan profesional.
                    </p>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                        <div>
                            <span class="block text-2xl font-bold text-gray-900 dark:text-white">Lulus</span>
                            <span class="text-[10px] text-gray-500 uppercase font-bold tracking-widest">Tingkat Paripurna</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold text-gray-900 dark:text-white">Valid</span>
                            <span class="text-[10px] text-gray-500 uppercase font-bold tracking-widest">Hingga Mei 2028</span>
                        </div>
                    </div>
                </div>

                <div class="p-8 rounded-3xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-xl relative overflow-hidden">
                    <i class="ri-verified-badge-line absolute -bottom-8 -right-8 text-9xl text-green-200 rotate-12"></i>
                    <p class="relative z-10 text-gray-700 dark:text-gray-300 italic leading-relaxed text-sm">
                        "Akreditasi bukan sekadar simbol di dinding, melainkan budaya kerja yang mendarah daging di setiap tindakan medis kami. Ini adalah janji kami kepada setiap orang tua bahwa buah hati mereka berada di tangan yang tepat."
                    </p>
                    <div class="mt-6 flex items-center gap-4 relative z-10">
                        <div class="h-px w-8 bg-green-600"></div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-gray-900 dark:text-white">Tim Akreditasi RSIA Aisyiyah Pekajangan</span>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
