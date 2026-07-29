@extends('app')

@section('content')
    <section
        class="relative overflow-hidden bg-gradient-to-br from-blue-100 via-blue-200 to-white pt-16 pb-20 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="absolute top-0 right-0 -trangray-y-12 trangray-x-12 blur-3xl opacity-30 dark:opacity-10">
            <div class="aspect-square w-[600px] rounded-full bg-gradient-to-br from-blue-600 to-cyan-400"></div>
        </div>

        <div class="max-w-8xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="space-y-8 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 backdrop-blur-sm dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 border border-blue-400 dark:border-blue-800">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                        </span>
                        <span class="text-xs font-bold uppercase tracking-widest">Layanan Rawat Jalan</span>
                    </div>

                    <h1
                        class="text-5xl lg:text-7xl font-black text-gray-800 dark:text-white leading-[1.1] tracking-tighter">
                        Solusi Kesehatan <br>
                        <span class="text-blue-600 dark:text-blue-400">Keluarga Anda.</span>
                    </h1>

                    <p class="text-lg text-gray-600 dark:text-gray-400 lg:mx-0 leading-relaxed font-normal">
                        Kesehatan ibu dan anak adalah fondasi masa depan yang cerah. Pusat Layanan Ibu dan Anak kami
                        menggabungkan kehangatan keluarga dengan standar medis tertinggi.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 text-left pt-2">
                        <div class="flex gap-4 items-start group">
        <div class="mt-1 shrink-0 w-6 h-6 rounded-xl bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-200 dark:shadow-none transition-transform group-hover:rotate-12">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 dark:text-white text-sm">Layanan Kehamilan Modern</h4>
            <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed">Pemantauan janin berkala dengan teknologi USG terbaru untuk memastikan tumbuh kembang optimal.</p>
        </div>
    </div>

    <div class="flex gap-4 items-start group">
        <div class="mt-1 shrink-0 w-6 h-6 rounded-xl bg-emerald-600 flex items-center justify-center shadow-lg shadow-emerald-200 dark:shadow-none transition-transform group-hover:rotate-12">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 dark:text-white text-sm">Nilai-Nilai Islami</h4>
            <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed">Pelayanan medis yang mengedepankan etika islami, memberikan ketenangan batin bagi keluarga.</p>
        </div>
    </div>

    <div class="flex gap-4 items-start group">
        <div class="mt-1 shrink-0 w-6 h-6 rounded-xl bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-200 dark:shadow-none transition-transform group-hover:rotate-12">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 dark:text-white text-sm">Kesehatan Anak Terpadu</h4>
            <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed">Screening stunting, imunisasi lengkap, dan konsultasi tumbuh kembang anak secara komprehensif.</p>
        </div>
    </div>

    <div class="flex gap-4 items-start group">
        <div class="mt-1 shrink-0 w-6 h-6 rounded-xl bg-pink-500 flex items-center justify-center shadow-lg shadow-pink-200 dark:shadow-none transition-transform group-hover:rotate-12">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 dark:text-white text-sm">Sentuhan Kekeluargaan</h4>
            <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed">Pendekatan pelayanan yang hangat dan bersahabat, membuat Anda merasa nyaman layaknya di rumah.</p>
        </div>
    </div>

    <div class="flex gap-4 items-start group">
        <div class="mt-1 shrink-0 w-6 h-6 rounded-xl bg-blue-600 flex items-center justify-center shadow-lg shadow-blue-200 dark:shadow-none transition-transform group-hover:rotate-12">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 dark:text-white text-sm">Sehat Bersama Kami</h4>
            <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed">Komitmen kami adalah memberikan hasil diagnosa yang tepat dan tindakan medis yang cepat.</p>
        </div>
    </div>

    <div class="flex gap-4 items-start group">
        <div class="mt-1 shrink-0 w-6 h-6 rounded-xl bg-amber-500 flex items-center justify-center shadow-lg shadow-amber-200 dark:shadow-none transition-transform group-hover:rotate-12">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 dark:text-white text-sm">Bahagia Melayani</h4>
            <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed">Menghadirkan senyum dan kebahagiaan melalui pelayanan yang tulus dan penuh empati.</p>
        </div>
    </div>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div
                        class="relative z-10 rounded-4xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-700 border-8 border-white dark:border-gray-800">
                        <img src="{{ asset('images/rawat-jalan.JPG') }}" alt="Medical Care"
                            class="w-full h-[550px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white dark:bg-gray-950">
        <div class="max-w-8xl mx-auto px-4">
            <div class=" flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2
                        class="text-4xl md:text-5xl font-black text-gray-800 dark:text-white leading-tight uppercase tracking-tighter">
                        One Stop <span class="text-blue-600 italic">Service</span> <br>
                        Pelayanan Terpadu.
                    </h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-lg font-medium border-l-4 border-blue-600 pl-8">
                        Kami menghargai waktu Anda. Seluruh rangkaian medis dilakukan dalam satu area terintegrasi.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-12 gap-6 auto-rows-[220px]">
                <div
                    class="md:col-span-8 md:row-span-2 group rounded-4xl bg-gray-900 dark:bg-black p-8 flex flex-col justify-end gap-6 relative overflow-hidden transition-all hover:scale-[1.01] min-h-[220px] duration-700">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/anjungan.webp') }}" alt="Self Check-In Facility"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-40 dark:opacity-30">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent dark:from-black dark:via-black/80 dark:to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 max-w-[85%]">
                        <span
                            class="inline-block px-3 py-1 bg-blue-600/20 border border-blue-500/30 rounded-full text-blue-300 font-bold uppercase text-[9px] tracking-widest mb-3">
                            Layanan Mandiri
                        </span>

                        <h4 class="text-white font-black uppercase text-xl leading-none tracking-tight">
                            Self Check-In
                        </h4>

                        <p class="text-gray-300 text-xs mt-2 leading-relaxed opacity-90 font-medium">
                            Kendali penuh di tangan Anda, dengan fitur Self Check-In yang memudahkan proses registrasi tanpa
                            antre panjang.
                        </p>
                    </div>
                </div>
                <div
                    class="md:col-span-4 md:row-span-2 col-span-2 group relative overflow-hidden rounded-4xl bg-emerald-700 text-white p-10 flex flex-col justify-end shadow-2xl shadow-emerald-200 dark:shadow-none transition-all hover:scale-[1.01] min-h-[300px]">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/ruang-poliklinik.webp') }}" alt="Layanan Pemeriksaan"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-40 dark:opacity-30">

                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900 via-emerald-800/60 to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10">
                        <span
                            class="inline-block px-3 py-1 bg-white/20 border border-white/30 rounded-full text-white font-bold uppercase text-[9px] tracking-widest mb-3">
                            Expert Care
                        </span>

                        <h4 class="text-2xl font-black uppercase leading-none tracking-tighter">
                            Pemeriksaan <br> <span class="text-emerald-300">Komprehensif</span>
                        </h4>

                        <p class="text-emerald-50 text-xs mt-4 leading-relaxed font-medium">
                            Konsultasi dengan dokter spesialis berpengalaman didukung peralatan medis terkini.
                        </p>
                    </div>
                </div>


                <div
                    class="md:col-span-6 md:row-span-2 col-span-2 group relative overflow-hidden rounded-4xl bg-pink-500 p-10 flex flex-col justify-end transition-all hover:scale-[1.01] shadow-2xl shadow-blue-100/50 dark:shadow-none min-h-[300px] duration-700">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/farmasi.JPG') }}" alt="Layanan Farmasi"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-50 dark:opacity-40">

                        <div class="absolute inset-0 bg-gradient-to-t from-pink-800 via-pink-900/20 to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10">
                        <span
                            class="inline-block px-3 py-1 bg-pink-600/50 border border-pink-600 text-white rounded-full text-[9px] font-bold uppercase tracking-widest mb-4">
                            Farmasi Terintegrasi
                        </span>

                        <h4 class="text-2xl md:text-3xl font-black text-white uppercase leading-[0.9] tracking-tighter">
                            Farmasi <br> <span class="text-pink-400">Cepat & Pasti.</span>
                        </h4>

                        <p class="text-gray-200 text-xs mt-4 leading-relaxed font-medium max-w-[200px]">
                            Antrean elektronik yang terhubung langsung dengan sistem resep dokter.
                        </p>
                    </div>
                </div>
                <div
                    class="md:col-span-6 md:row-span-2 group relative overflow-hidden rounded-4xl bg-blue-700 text-white p-12 flex flex-col justify-end shadow-2xl shadow-blue-200 dark:shadow-none transition-all hover:scale-[1.01] duration-700">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/laboratorium.jpg') }}" alt="Fasilitas Diagnostik"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-30 dark:opacity-20">

                        <div class="absolute inset-0 bg-gradient-to-t from-blue-700 via-blue-700/80 to-blue-700/50"></div>
                    </div>

                    <div
                        class="absolute -top-10 -right-10 w-64 h-64 bg-white/10 rounded-full blur-3xl z-10 pointer-events-none">
                    </div>

                    <div class="relative z-20">
                        <span
                            class="px-4 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-black uppercase tracking-widest border border-white/30">
                            One Stop Service
                        </span>
                        <h3 class="text-3xl md:text-5xl font-black mt-6 mb-4 leading-none tracking-tighter">
                            Tuntas dalam <span class="text-blue-200 italic">Satu Langkah</span>
                        </h3>
                        <p class="text-blue-100 max-w-md text-sm leading-relaxed opacity-95 font-medium">
                            Laboratorium, Radiologi, dan Klinik Spesialis berada dalam satu zona untuk kenyamanan maksimal
                            Anda.
                        </p>
                    </div>
                </div>


                {{-- <div
                    class="md:col-span-6 md:row-span-2 group rounded-4xl bg-orange-400 p-10 flex flex-col justify-end gap-6 relative overflow-hidden transition-all hover:scale-[1.01] shadow-2xl shadow-orange-200 dark:shadow-none min-h-[250px]">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/kasir-keuangan.JPG') }}" alt="Digital Payment System"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-30 dark:opacity-20">

                        <div class="absolute inset-0 bg-gradient-to-t from-orange-700 via-orange-600/10 to-transparent">
                        </div>
                    </div>
                    <div class="relative z-10">
                        <span
                            class="inline-block px-3 py-1 bg-white/20 border border-white/30 rounded-full text-white font-bold uppercase text-[9px] tracking-widest mb-3">
                            Transaksi Digital
                        </span>

                        <h4 class="text-white font-black uppercase text-xl md:text-2xl leading-none tracking-tight">
                            Cashless <span class="text-orange-100">System</span>
                        </h4>

                        <p class="text-orange-50 text-xs leading-relaxed opacity-95 font-medium ">
                            Pembayaran nirkontak via QRIS, Kartu Debit, dan Asuransi yang terintegrasi penuh.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section id="poliklinik" class="bg-blue-50 dark:bg-gray-900 w-full py-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-black text-gray-800 dark:text-white uppercase tracking-tight">Temukan Dokter
                Spesialis</h2>
            <p class="text-gray-500 mt-2">Gunakan filter untuk menemukan jadwal dokter yang sesuai untuk Anda.</p>
        </div>
        <livewire:beranda.filter-poliklinik />

    </section>

    <section class="py-12 bg-white dark:bg-gray-800">

        <div class="max-w-7xl mx-auto px-4">
<div class="text-center mb-16">
    <h2 class="flex flex-col mb-4 tracking-tight">
        <span class="font-corinthia text-blue-700 dark:text-blue-400 leading-none -mb-2 md:-mb-4" style="font-size: clamp(2.5rem, 8vw, 4rem);">
            Profesional & Kompeten
        </span>
        <span class="text-3xl md:text-5xl font-black text-blue-800 dark:text-white uppercase tracking-tighter">
            Mengenal Dokter Kami
        </span>
    </h2>
    <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto uppercase text-[10px] font-bold tracking-[0.3em]">
        Dedikasi Penuh Untuk Kesehatan Ibu & Buah Hati
    </p>
</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                @foreach($dokter as $specialty)
                    @php
                        $specName = strtoupper($specialty['name']);
                        $color = match (true) {
                            str_contains($specName, 'ANAK') => 'amber',
                            str_contains($specName, 'KANDUNGAN'), str_contains($specName, 'KEBIDANAN') => 'pink',
                            str_contains($specName, 'DALAM') => 'emerald',
                            str_contains($specName, 'BEDAH') => 'red',
                            default => 'blue',
                        };
                    @endphp

                    @foreach($specialty['doctors'] as $doctor)
                        <div class="group relative aspect-[3/4] rounded-4xl overflow-hidden bg-gray-200 dark:bg-gray-800 shadow-lg transition-all duration-500 hover:-translate-y-2 ">

                            @if(!empty($doctor['photo']))
                                <img src="{{ asset($doctor['photo']) }}" alt="{{ $doctor['name'] }}"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div class="absolute inset-0 flex items-center justify-center bg-gray-100 dark:bg-gray-800">
                                    <i class="ri-user-fill text-6xl text-gray-300"></i>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <span
                                    class="inline-block px-3 py-1 bg-{{ $color }}-500 text-white text-[9px] font-black uppercase tracking-widest rounded-full mb-3 shadow-lg shadow-{{ $color }}-500/30">
                                    {{ $specialty['name'] }}
                                </span>

                                <h4
                                    class="text-white text-lg font-bold leading-tight group-hover:text-{{ $color }}-400 transition-colors">
                                    {{ $doctor['name'] }}
                                </h4>

                                <div class="mt-4 overflow-hidden h-0 group-hover:h-10 transition-all duration-300 ease-in-out">
                                    <a href="#"
                                        class="inline-flex items-center gap-2 text-white text-xs font-bold bg-white/20 backdrop-blur-md px-5 py-2 rounded-xl hover:bg-white hover:text-black transition-all">
                                        Detail Profil <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="absolute top-4 right-4">
                                <div
                                    class="w-8 h-8 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20">
                                    <i class="ri-heart-line text-white text-sm"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-24 bg-gray-50 dark:bg-gray-950 overflow-hidden">
        <div class="max-w-8xl mx-auto px-4">
            <div class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-800 dark:text-white uppercase tracking-tighter">
                    Booking <span class="text-blue-600">Mudah</span> <br>
                    Dari Genggaman.
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-lg font-medium border-l-4 border-blue-600 pl-8">
                    Pilih jalur pendaftaran sesuai dengan penjamin kesehatan Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="group relative overflow-hidden rounded-4xl bg-blue-700/90 p-12 text-white shadow-2xl shadow-blue-200 dark:shadow-none transition-all hover:scale-[1.02] duration-500">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/rsiap-mobile-mockup.webp') }}" alt="RSIAP Mobile App Use"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-30 dark:opacity-20">

                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-800/20 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-between">
                        <div>
                            <div
                                class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center mb-8 border border-white/20">
                                <i class="ri-smartphone-line text-4xl text-white"></i>
                            </div>
                            <h3 class="text-4xl font-black uppercase leading-[0.9] mb-4 tracking-tighter">RSIAP <br>Mobile
                            </h3>
                            <p class="text-blue-100 font-medium opacity-95 max-w-xs text-sm leading-relaxed">
                                Khusus Pasien <strong class="uppercase underline font-extrabold">Umum</strong>. Pantau
                                jadwal dokter dan riwayat medis secara
                                real-time.
                            </p>
                        </div>

                        <div class="mt-12 flex gap-4">
                            <a href="https://play.google.com/store/apps/details?id=com.rsiap.mobile&hl=id"
                                class="px-6 py-3 bg-white text-blue-700 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-blue-50 transition-colors shadow-lg shadow-blue-900/20">
                                <i class="ri-google-play-fill"></i> Play Store
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative overflow-hidden rounded-4xl bg-emerald-700/90 p-12 text-white shadow-2xl shadow-emerald-200 dark:shadow-none transition-all hover:scale-[1.02] duration-500">

                    <div class="absolute inset-0 z-0">
                        <img src="{{ asset('images/mobile-jkn.webp') }}" alt="Mobile JKN App Use"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-30 dark:opacity-20">

                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-800/20 to-transparent">
                        </div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-between">
                        <div>
                            <div
                                class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center mb-8 border border-white/20">
                                <i class="ri-shield-check-line text-4xl text-white"></i>
                            </div>
                            <h3 class="text-4xl font-black uppercase leading-[0.9] mb-4 tracking-tighter">Mobile JKN
                            </h3>
                            <p class="text-emerald-100 font-medium opacity-95 max-w-xs text-sm leading-relaxed">
                                Khusus Peserta <strong class="underline font-extrabold uppercase">BPJS Kesehatan</strong>.
                                Ambil antrean online faskes rujukan tingkat lanjut tanpa
                                ribet.
                            </p>
                        </div>

                        <div class="mt-12 flex gap-4">
                            <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile&hl=id" target="_blank"
                                class="px-6 py-3 bg-white text-emerald-700 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-emerald-50 transition-colors shadow-lg shadow-emerald-900/20">
                                <i class="ri-google-play-fill"></i> Play Store
                            </a>
                            <a href="https://apps.apple.com/sa/app/mobile-jkn/id1237601115" target="_blank"
                                class="px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold text-sm flex items-center gap-2 border border-white/20 hover:bg-emerald-500 transition-colors shadow-lg shadow-emerald-900/20">
                                <i class="ri-apple-fill"></i> App Store
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Mengatasi nama dokter yang terlalu panjang agar tetap rapi dalam 2 baris */
        .minimal-two-line {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            min-h-[2.5rem
            /* 40px */
            ];
            /* Sesuaikan agar tinggi kartu seragam */
        }
    </style>

@endpush