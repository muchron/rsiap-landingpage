@extends('app')

@section('content')
    <section class="relative py-16 lg:py-32 overflow-hidden bg-slate-900 dark:bg-gray-950 transition-colors duration-300">
        {{-- 1. Background Layer Utama --}}
        <div class="absolute inset-0 z-0">
            {{-- Base Gradient --}}
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/90 via-blue-500/80 to-green-700/90 dark:from-blue-900/50 dark:via-gray-900 dark:to-green-900/50"></div>

            {{-- 2. Texture Layer (Posisikan di atas gradient agar terlihat) --}}
            <div class="absolute inset-0 opacity-30 dark:opacity-20 mix-blend-overlay pointer-events-none"
                style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); background-repeat: repeat;">
            </div>

            {{-- 3. Floating Glows (Efek cahaya di belakang teks) --}}
            <div class="absolute -top-24 -left-24 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-blue-400/20 dark:bg-blue-500/10 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-[250px] md:w-[500px] h-[250px] md:h-[500px] bg-green-300/10 dark:bg-green-500/5 rounded-full blur-[100px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="flex flex-col gap-1 mb-8"
                    style="font-size: clamp(2.5rem, 20vw, 6rem);">
                    <span class="text-2xl md:text-6xl font-black text-white dark:text-gray-100 font-corinthia">
                        Assalamualaikum Wr. Wb.
                    </span>
                </h1>
                {{-- Deskripsi & Garis Dekorasi --}}
                <div class="relative pt-8 max-w-xl mx-auto">
                    <div class="absolute left-1/2 -translate-x-1/2 top-0 w-16 h-[2px] bg-blue-300/50 dark:bg-blue-500/30"></div>
                    <p class="text-blue-50/90 dark:text-gray-400 text-sm md:text-lg leading-relaxed font-medium">
                        Mengenal lebih dekat <span class="text-white dark:text-blue-400 font-bold">RSIA Aisyiyah Pekajangan</span>. Dedikasi tanpa henti dalam menghadirkan harmoni pelayanan kesehatan Ibu dan Anak yang modern namun tetap islami.
                    </p>
                </div>

                {{-- Scroll Indicator --}}
                <div class="mt-12 md:mt-20 flex justify-center animate-bounce opacity-40">
                    <div class="w-5 h-8 border-2 border-white dark:border-gray-500 rounded-full flex justify-center pt-1">
                        <div class="w-1 h-1.5 bg-white dark:bg-gray-500 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Wave Divider --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] transform rotate-180">
            <svg class="relative block w-full h-[40px] md:h-[70px]" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="fill-white dark:fill-gray-900"></path>
            </svg>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white dark:bg-gray-900 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-12 items-center">

                <div class="relative flex justify-center order-2 lg:order-1">
                    <div class="relative group max-w-sm md:max-w-md lg:max-w-lg">

                        <div class="absolute -bottom-6 -right-6 w-full h-full border-2 border-blue-600 rounded-[2rem] z-0 transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2 opacity-20"></div>

                        <div class="relative z-10">
                            <img src="{{ asset('images/direktur-rsia-aisyiyah-pkj.png') }}"
                                alt="Direktur RSIA"
                                class="w-full rounded-[2rem] shadow-2xl object-cover dark:brightness-[0.8] transition-all duration-700 group-hover:scale-[1.02]">

                            <div class="absolute -bottom-8 -left-8 -right-8 md:-left-12 md:-right-20 z-20">
                                <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-l-[12px] border-blue-600">
                                    <h4 class="text-blue-800 dark:text-blue-400 font-black text-xl md:text-3xl leading-normal italic tracking-tighter">
                                        dr. H. Widjdan Kadir
                                    </h4>
                                    <div class="flex items-center gap-4 mt-3">
                                        <span class="h-[2px] w-12 bg-blue-600"></span>
                                        <p class="text-gray-500 dark:text-gray-400 text-xs md:text-sm uppercase font-black tracking-[0.2em]">
                                            Direktur RSIA Aisyiyah Pekajangan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SISI KANAN: TYPOGRAPHY SAMBUTAN (Cleaner & Bolder) --}}
                <div class="order-1 lg:order-2">
                    <div class="space-y-8">
                        <div>
                            <span class="inline-block px-4 py-1.5 rounded-lg bg-blue-600 text-white text-[10px] font-black uppercase tracking-[0.3em] mb-6 shadow-lg shadow-blue-600/20">
                                Sambutan Direktur
                            </span>

                            <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white mb-6 leading-[1.1] tracking-tight">
                                Mewujudkan Pelayanan <br>
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-800">
                                    Islami & Profesional
                                </span>
                            </h2>
                        </div>

                        <div class="relative">
                            {{-- Watermark Quote --}}
                            <i class="ri-double-quotes-l absolute -top-10 -left-8 text-8xl text-gray-200 dark:text-gray-800 z-0"></i>

                            <div class="relative z-10 space-y-6">
                                <p class="text-gray-700 dark:text-gray-300 text-lg md:text-xl leading-relaxed font-medium italic">
                                    "Assalamualaikum Wr. Wb. Puji syukur kita panjatkan kehadirat Allah SWT. Website ini hadir sebagai sarana informasi untuk memberikan gambaran mengenai dedikasi kami dalam melayani Ibu dan Anak."
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed">
                                    Kami berkomitmen untuk terus meningkatkan potensi pelayanan, baik dari segi kompetensi SDM maupun modernisasi sarana prasarana, demi kenyamanan dan keselamatan pasien yang menjadi prioritas utama kami.
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed">
                                    Semoga kehadiran RSIA Aisyiyah Pekajangan benar-benar memberikan manfaat luas bagi masyarakat. Wassalammualaikum Wr. Wb.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-gradient-to-br from-blue-200 via-gree-400 to-green-700 dark:from-blue-900 dark:via-gray-900 dark:to-green-900 overflow-hidden ">
        <div class="container mx-auto px-4 md:px-6 max-w-screen-xl">

            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-xs font-bold text-blue-800 dark:text-blue-400 uppercase tracking-[0.4em] mb-4">Moto Pelayanan</h2>
                <div class="inline-flex flex-col items-center">
                    <h1 class="flex flex-col mb-8 tracking-tight">
                        {{-- Menggunakan leading-none dan margin bawah negatif sedikit untuk mendekatkan teks --}}
                        <span class="italic font-medium text-blue-900 dark:text-blue-300 leading-none font-corinthia -mb-2 md:-mb-4"
                            style="font-size: clamp(2.5rem, 20vw, 6rem);">
                            Sehat dan Bahagia
                        </span>

                        {{-- Menghilangkan leading yang terlalu besar --}}
                        <span class="text-4xl md:text-7xl font-black text-blue-100 dark:text-gray-100 uppercase tracking-tighter leading-none">
                            Bersama Kami
                        </span>
                    </h1>
                    <div class="w-24 h-1 bg-white/30 mt-6 rounded-full"></div>
                </div>
            </div>

            <div class="flex flex-col gap-8 md:gap-10">
                {{-- Visi --}}
                <div class="relative group overflow-hidden bg-white dark:bg-gray-900 p-6 md:p-10 rounded-3xl shadow-xl shadow-blue-900/5 border border-blue-100 dark:border-gray-700">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-100 dark:bg-gray-800 rounded-full blur-3xl opacity-50 dark:opacity-100"></div>

                    <div class="relative z-10 flex flex-col md:flex-row md:items-center gap-6">
                        <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-blue-500 to-green-600 dark:from-blue-900 dark:to-green-900 rounded-2xl md:rounded-3xl flex items-center justify-center text-white shadow-lg dark:shadow-blue-900/20">
                            <i class="ri-eye-line text-3xl md:text-4xl"></i>
                        </div>
                        <div>
                            <h3 class="text-[10px] md:text-xs font-bold text-blue-600 uppercase tracking-[0.2em] mb-2">Visi Kami</h3>
                            <p class="text-xl md:text-3xl font-extrabold text-gray-800 dark:text-white leading-tight">
                                Menjadi Rumah Sakit Khusus Ibu dan Anak dengan standar mutu pelayanan <span class="text-blue-600 dark:text-blue-400">Islami</span>, memuaskan dan aman bagi pelanggan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Misi - Perbaikan Radius & Padding Mobile --}}
                <div class="relative overflow-hidden p-6 md:p-10 rounded-3xl shadow-2xl text-white dark:bg-gray-900 bg-gradient-to-br from-blue-700 to-green-900 dark:from-slate-800 dark:to-gray-900"
                    style="">

                    <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>

                    <div class="relative z-10">
                        <div class="flex items-center gap-4 mb-6 md:mb-8">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-white/20 backdrop-blur-md rounded-xl md:rounded-2xl flex items-center justify-center text-white">
                                <i class="ri-flag-line text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold tracking-tight">Misi Kami</h3>
                        </div>

                        {{-- Grid Misi --}}
                        <div class="grid grid-cols-1 gap-4 md:gap-6">
                            {{-- Item Misi --}}
                            <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 rounded-full bg-blue-400/20 flex items-center justify-center text-blue-300">
                                    <i class="ri-heart-pulse-line text-sm md:text-base"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-base md:text-lg mb-1 dark:text-blue-500">Pelayanan Profesional</h4>
                                    <p class="text-blue-50/70 text-sm md:text-base leading-relaxed">Memberikan pelayanan kesehatan khusus ibu dan anak secara <span class="text-gray-100 dark:text-white font-bold">profesional dengan fasilitas yang lengkap, sumber daya manusia yang berkualitas, dan terakreditasi</span> </p>
                                </div>
                            </div>

                            <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 rounded-full bg-blue-400/20 flex items-center justify-center text-blue-300">
                                    <i class="ri-shake-hands-line text-sm md:text-base"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-base md:text-lg mb-1 dark:text-blue-500">Kemitraan Berkesinambungan</h4>
                                    <p class="text-blue-50/70 text-sm md:text-base leading-relaxed">Membangun kemitraan dengan berbagai pihak sehingga <span class="text-gray-100 dark:text-white font-bold">terbentuk jaringan pelayanan kesehatan secara berkesinambungan</span> yang mendukung tercapainya program kesehatan ibu dan anak </p>
                                </div>
                            </div>

                            <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 rounded-full bg-blue-400/20 flex items-center justify-center text-blue-300">
                                    <i class="ri-instance-line text-sm md:text-base"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-base md:text-lg mb-1 dark:text-blue-500">Ibadah dan Dakwah</h4>
                                    <p class="text-blue-50/70 text-sm md:text-base leading-relaxed">Memberikan pelayanan kesehatan sebagai<span class="text-gray-100 dark:text-white font-bold"> ibadah dan dakwah kepada seluruh masyarakat.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white dark:bg-gray-900 overflow-hidden">
        <div class="container mx-auto px-6">
            {{-- Header Section --}}
            <div class="text-center mb-20">
                <h2 class="text-xs font-bold text-blue-600 uppercase tracking-[0.3em] mb-3">Rekam Jejak</h2>
                <h3 class="text-3xl md:text-5xl font-black text-gray-900 dark:text-white">Sejarah & <span class="text-blue-600">Dedikasi</span></h3>
                <div class="mt-4 w-24 h-1.5 bg-blue-500 mx-auto rounded-full"></div>
            </div>

            <div class="relative">
                {{-- Garis Tengah Timeline (Desktop) --}}
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-blue-100 via-blue-500 to-blue-100"></div>

                <div class="space-y-16">

                    {{-- Point 1: Awal Berdiri --}}
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="flex-1 md:w-1/2 w-full md:pr-12 md:text-right order-2 md:order-1">
                            <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500">
                                <span class="text-blue-600 font-bold text-sm">Masa Awal</span>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-1 mb-3">Balai Pengobatan & Rumah Bersalin</h4>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                                    Berawal dari sebuah Balai Pengobatan (BP) dan Rumah Bersalin (RB) yang dikelola secara mandiri oleh Pimpinan Cabang Aisyiyah Pekajangan. Fokus utama adalah memberikan pelayanan kesehatan bagi masyarakat, khususnya ibu dan anak di wilayah Pekalongan.
                                </p>
                            </div>
                        </div>
                        {{-- Dot Center --}}
                        <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full border-4 border-white dark:border-gray-900 shadow-xl order-1 md:order-2 mb-8 md:mb-0">
                            <i class="ri-community-line text-white"></i>
                        </div>
                        <div class="flex-1 md:w-1/2 hidden md:block order-3"></div>
                    </div>

                    {{-- Point 2: Peningkatan Status --}}
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="flex-1 md:w-1/2 hidden md:block"></div>
                        {{-- Dot Center --}}
                        <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-slate-800 rounded-full border-4 border-white dark:border-gray-900 shadow-xl mb-8 md:mb-0">
                            <i class="ri-hospital-line text-white"></i>
                        </div>
                        <div class="flex-1 md:w-1/2 w-full md:pl-12 order-2">
                            <div class="p-8 bg-blue-600 dark:bg-blue-900 rounded-3xl shadow-2xl shadow-blue-900/20 text-white transition-all duration-500">
                                <span class="text-blue-200 font-bold text-sm">Transformasi</span>
                                <h4 class="text-xl font-bold mt-1 mb-3 text-white">Peningkatan Status Menjadi RSIA</h4>
                                <p class="text-blue-50/80 dark:text-blue-50 leading-relaxed text-sm">
                                    Seiring meningkatnya kebutuhan masyarakat dan standar medis, institusi ini bertransformasi menjadi Rumah Sakit Ibu dan Anak (RSIA). Hal ini menandai penambahan fasilitas medis krusial seperti ruang operasi dan poliklinik spesialis yang lebih lengkap.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Point 3: Era Modern --}}
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="flex-1 md:w-1/2 w-full md:pr-12 md:text-right order-2 md:order-1">
                            <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500">
                                <span class="text-blue-600 font-bold text-sm">Era Modern</span>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mt-1 mb-3">Akreditasi & Kemitraan Strategis</h4>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                                    Kini beroperasi dengan standar mutu Islami yang aman bagi pelanggan. RSIA Aisyiyah Pekajangan juga telah bermitra dengan BPJS Kesehatan guna memperluas akses layanan kesehatan berkualitas bagi seluruh lapisan masyarakat.
                                </p>
                            </div>
                        </div>
                        {{-- Dot Center --}}
                        <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-blue-500 rounded-full border-4 border-white dark:border-gray-900 shadow-xl order-1 md:order-2 mb-8 md:mb-0">
                            <i class="ri-shield-check-line text-white"></i>
                        </div>
                        <div class="flex-1 md:w-1/2 hidden md:block order-3"></div>
                    </div>

                    {{-- Point 4: Fasilitas Terkini --}}
                    <div class="relative flex flex-col md:flex-row items-center group">
                        <div class="flex-1 md:w-1/2 hidden md:block"></div>
                        {{-- Dot Center --}}
                        <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-slate-800 rounded-full border-4 border-white dark:border-gray-900 shadow-xl mb-8 md:mb-0">
                            <i class="ri-flask-line text-white"></i>
                        </div>
                        <div class="flex-1 md:w-1/2 w-full md:pl-12 order-2">
                            <div class="p-8 bg-blue-600 dark:bg-blue-900 rounded-3xl shadow-2xl shadow-blue-900/20 text-white transition-all duration-500">
                                <span class="text-blue-200 font-bold text-sm">Hari Ini</span>
                                <h4 class="text-xl font-bold mt-1 mb-3 text-white">Layanan Komprehensif</h4>
                                <p class="text-blue-50/80 dark:text-blue-50 leading-relaxed text-sm">
                                    Memiliki fasilitas lengkap mulai dari IGD 24 Jam, poliklinik spesialis, hingga penunjang medis canggih seperti Laboratorium dan Radiologi untuk melayani dengan sepenuh hati. Seluruh aktivitas didedikasikan sebagai bagian dari ibadah dan dakwah Islami.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- SECTION: MAKSUD DAN TUJUAN --}}
    <section class="py-16 md:py-24 bg-gray-50 dark:bg-gray-950 relative overflow-hidden">
        {{-- Background Decoration --}}
        <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-50/50 dark:bg-blue-950/10 skew-x-12 transform translate-x-20"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-5 gap-12 items-center">

                {{-- Sisi Kiri: Judul --}}
                <div class="lg:col-span-2">
                    <div class="inline-block px-4 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-bold uppercase tracking-widest mb-4">
                        Purpose
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white leading-tight mb-6">
                        Maksud & <br>
                        <span class="text-blue-600">Tujuan</span> Pendirian
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                        Landasan fundamental yang mendasari berdirinya RSIA Aisyiyah Pekajangan sebagai institusi kesehatan yang membawa misi kemanusiaan.
                    </p>
                </div>

                {{-- Sisi Kanan: List --}}
                <div class="lg:col-span-3 space-y-6">
                    {{-- Item 1 --}}
                    <div class="flex gap-6 p-6 rounded-2xl bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-black text-xl">
                            1
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium leading-relaxed">
                            Menjadi RSIA yang <span class="text-gray-900 dark:text-white font-bold">dikenal dan dipercaya</span> oleh masyarakat Pekalongan dan sekitarnya sebagai RS Khusus Ibu dan Anak dengan standar mutu sebagai prioritas utama.
                        </p>
                    </div>

                    {{-- Item 2 --}}
                    <div class="flex gap-6 p-6 rounded-2xl bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-black text-xl">
                            2
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium leading-relaxed">
                            Menjadi RSIA yang menerapkan <span class="text-gray-900 dark:text-white font-bold">nilai-nilai Islam</span> dalam tata kelola lingkungan dan pelayanan, serta mengutamakan prinsip <span class="italic text-blue-600 dark:text-blue-400">Rahmatan lil’alamin</span>.
                        </p>
                    </div>

                    {{-- Item 3 --}}
                    <div class="flex gap-6 p-6 rounded-2xl bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-black text-xl">
                            3
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium leading-relaxed">
                            Menjadi RSIA yang memberikan pelayanan sebagai <span class="text-gray-900 dark:text-white font-bold">ibadah dan dakwah</span> dengan tetap memperhatikan keseimbangan antara kesejahteraan dunia dan akhirat.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
