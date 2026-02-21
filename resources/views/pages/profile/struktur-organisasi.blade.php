@extends('app')

@section('content')
    {{-- 1. Section Utama: Gambar Struktur & Background Effect --}}
    <section class="relative py-12 overflow-hidden bg-white dark:bg-gray-800">
        {{-- 1. Background Layer --}}
        <div class="absolute inset-0 z-0">
            {{-- Base Gradient --}}
            <div class="absolute inset-0 bg-gradient-to-br from-gray-100 via-green-50/30 to-gray-200 dark:from-gray-950 dark:via-green-950/20 dark:to-slate-950"></div>

            {{-- 2. Texture Layer --}}
            <div class="absolute inset-0 opacity-40 dark:opacity-20 mix-blend-overlay pointer-events-none"
                style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); background-repeat: repeat;">
            </div>

            {{-- 3. Floating Glows --}}
            <div class="absolute -top-24 -left-24 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-gradient-to-r from-green-400/20 to-transparent dark:from-green-500/10 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-[250px] md:w-[500px] h-[250px] md:h-[500px] bg-gradient-to-l from-green-300/10 to-transparent dark:from-green-500/5 rounded-full blur-[100px]"></div>
        </div>

        <div class="container relative z-10 mx-auto px-4 max-w-5xl">
            {{-- Title --}}
            <div class="text-center mb-2">
                <h1 class="flex flex-col mb-4 tracking-tight">
                    <span class="font-corinthia text-green-700 dark:text-green-400 leading-none -mb-2 md:-mb-4" style="font-size: clamp(2.5rem, 8vw, 4rem);">
                        Sinergi & Dedikasi
                    </span>
                    <span class="text-3xl md:text-5xl font-black text-gray-900 dark:text-white uppercase tracking-tighter">
                        Struktur Organisasi
                    </span>
                </h1>
                <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto uppercase text-xs font-bold tracking-[0.2em] -m-3">
                    RSIA Aisyiyah Pekajangan
                </p>
            </div>

            {{-- Gambar Struktur --}}
            <div class="relative group cursor-zoom-in p-8">
                <div class="absolute inset-0 bg-green-500/5 blur-3xl rounded-full scale-90 pointer-events-none"></div>

                <img src="{{ asset('SO RSIA 2025.png') }}"
                    alt="Struktur Organisasi RSIA Aisyiyah Pekajangan"
                    class="relative z-10 w-full h-auto rounded-2xl dark:invert transition-all duration-500 [mask-image:linear-gradient(to_bottom,black_95%,transparent_100%)]">
            </div>
        </div>
    </section>

    {{-- 2. Section Tambahan: Visi & Informasi (Diletakkan di bawah gambar) --}}
    <section class="py-20 bg-gray-50 dark:bg-gray-950 transition-colors duration-500">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="p-8 rounded-3xl bg-gray-50/50 dark:bg-gray-900/50 backdrop-blur-md border border-gray-100 dark:border-gray-800 shadow-xl">
                    <i class="ri-double-quotes-l text-4xl text-gray-300 mb-3 block"></i>
                    <p class="text-gray-700 dark:text-gray-300 italic leading-relaxed">
                        "Kepemimpinan di RSIA Aisyiyah Pekajangan adalah tentang amanah dan pelayanan. Kami bersinergi untuk memastikan setiap alur koordinasi bermuara pada satu tujuan utama: Keselamatan dan kepuasan pasien yang berlandaskan nilai-nilai Ihsan."
                    </p>
                    <div class="mt-6 flex items-center gap-4">
                        <div class="h-px w-8 bg-green-600"></div>
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-900 dark:text-white">Direksi RSIA Aisyiyah</span>
                    </div>
                </div>

                {{-- Narasi --}}
                <div class="flex flex-col justify-center space-y-4">
                    <h3 class="text-2xl font-black text-green-800 dark:text-white uppercase tracking-normal ">Tata Kelola Terpadu</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Struktur ini mencerminkan komitmen kami terhadap transparansi dan profesionalisme. Terbagi dalam dua pilar utama (Pelayanan & Penunjang serta Keuangan & SDI) untuk menjamin efektivitas operasional rumah sakit.
                    </p>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-[10px] font-bold rounded-full uppercase">Akuntabel</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-[10px] font-bold rounded-full uppercase">Responsif</span>
                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-[10px] font-bold rounded-full uppercase">Islami</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
