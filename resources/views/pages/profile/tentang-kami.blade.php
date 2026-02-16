@extends('app')

@section('content')
    {{-- 1. Hero Section Tentang Kami --}}
    <section class="relative py-20 lg:py-32 overflow-hidden gradient-to-r from-green-400 to-green-600">
        {{-- Dekorasi Background --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-green-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-green-300 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">Tentang Kami</h1>
            <p class="text-green-100 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Mengenal lebih dekat RSIA Aisyiyah Pekajangan, dedikasi kami dalam memberikan pelayanan kesehatan terbaik untuk Ibu dan Anak sejak masa berdirinya.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white dark:bg-gray-900 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-12 items-center">

                <div class="relative flex justify-center order-2 lg:order-1">
                    <div class="relative group max-w-sm md:max-w-md lg:max-w-lg">

                        <div class="absolute -bottom-6 -right-6 w-full h-full border-2 border-green-600 rounded-[2rem] z-0 transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2 opacity-20"></div>

                        <div class="relative z-10">
                            <img src="{{ asset('images/direktur-rsia-aisyiyah-pkj.png') }}"
                                alt="Direktur RSIA"
                                class="w-full rounded-[2rem] shadow-2xl object-cover dark:brightness-[0.8] transition-all duration-700 group-hover:scale-[1.02]">

                            <div class="absolute -bottom-8 -left-8 -right-8 md:-left-12 md:-right-20 z-20">
                                <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-l-[12px] border-green-600">
                                    <h4 class="text-green-800 dark:text-green-400 font-black text-xl md:text-3xl leading-normal italic tracking-tighter">
                                        dr. H. Widjdan Kadir
                                    </h4>
                                    <div class="flex items-center gap-4 mt-3">
                                        <span class="h-[2px] w-12 bg-green-600"></span>
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
                            <span class="inline-block px-4 py-1.5 rounded-lg bg-green-600 text-white text-[10px] font-black uppercase tracking-[0.3em] mb-6 shadow-lg shadow-green-600/20">
                                Sambutan Direktur
                            </span>

                            <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white mb-6 leading-[1.1] tracking-tight">
                                Mewujudkan Pelayanan <br>
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800">
                                    Islami & Profesional
                                </span>
                            </h2>
                        </div>

                        <div class="relative">
                            {{-- Watermark Quote --}}
                            {{-- <i class="ri-double-quotes-l absolute -top-10 -left-8 text-8xl text-green-100 dark:text-gray-800 z-0"></i> --}}

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

                        {{-- Footer Sambutan --}}
                        <div class="flex items-center gap-6 pt-8 border-t border-gray-100 dark:border-gray-800">
                            <div class="h-16 w-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                                <i class="ri-shield-check-fill text-3xl text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 dark:text-gray-500 text-xs uppercase font-bold tracking-widest">Tanda Tangan Elektronik Sah</p>
                                <p class="text-gray-900 dark:text-white font-black text-xl italic mt-0.5">Direktur Utama RSIA</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 3. Visi & Misi --}}
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Visi --}}
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-sm border border-green-100 dark:border-gray-700">
                    <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center mb-6 text-green-600">
                        <i class="ri-eye-line text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Visi Kami</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Menjadi Rumah Sakit Ibu dan Anak pilihan utama masyarakat yang memberikan pelayanan profesional, Islami, dan bermutu tinggi di wilayah Pekalongan dan sekitarnya.
                    </p>
                </div>

                {{-- Misi --}}
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-sm border border-green-100 dark:border-gray-700 text-white" style="background: linear-gradient(135deg, #166534 0%, #064e3b 100%);">
                    <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center mb-6 text-white">
                        <i class="ri-flag-line text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Misi Kami</h3>
                    <ul class="space-y-3 opacity-90">
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line mt-1"></i>
                            <span>Menyelenggarakan pelayanan kesehatan yang bermutu dan mengutamakan keselamatan pasien.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line mt-1"></i>
                            <span>Meningkatkan kompetensi SDM secara berkesinambungan sesuai standar profesional.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line mt-1"></i>
                            <span>Mengembangkan sarana dan prasarana rumah sakit yang modern dan Islami.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. Sejarah Singkat --}}
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-8">Sejarah Kami</h2>
            <div class="relative border-l-2 border-green-200 dark:border-gray-700 mx-auto text-left pl-8 space-y-10">
                <div class="relative">
                    <div class="absolute -left-[41px] top-0 w-4 h-4 bg-green-600 rounded-full border-4 border-white dark:border-gray-900"></div>
                    <h4 class="font-bold text-green-600 mb-2">Awal Berdiri</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Berawal dari semangat pengabdian Pimpinan Cabang Aisyiyah (PCA) Pekajangan untuk membantu derajat kesehatan ibu dan anak di lingkungan sekitar.</p>
                </div>
                <div class="relative">
                    <div class="absolute -left-[41px] top-0 w-4 h-4 bg-green-600 rounded-full border-4 border-white dark:border-gray-900"></div>
                    <h4 class="font-bold text-green-600 mb-2">Perkembangan</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Dari klinik bersalin sederhana, fasilitas ditingkatkan hingga menjadi Rumah Sakit Ibu dan Anak (RSIA) yang terakreditasi.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
