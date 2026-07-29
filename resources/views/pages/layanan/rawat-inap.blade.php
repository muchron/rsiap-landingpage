@extends('app')

@section('content')
                        <section class="bg-gray-50 dark:bg-blue-950 min-h-screen pb-20 transition-colors duration-500 overflow-x-hidden">

                            <div class="relative min-h-[70vh] flex items-center bg-blue-900 dark:bg-black overflow-hidden py-32 mb-12 w-full">
                                <div class="absolute inset-0 z-0">
                                    <img src="{{ asset('images/kamar-prioritas.JPG') }}"
                                        class="w-full h-full object-cover opacity-40 dark:opacity-20 transition-opacity duration-700"
                                        alt="Hospital Background">
                                    <div class="absolute inset-0 bg-gradient-to-b from-blue-900/90 via-blue-900/40 to-gray-50 dark:to-blue-950"></div>
                                </div>

                                <div class="absolute -top-24 -left-24 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] z-0"></div>

                                <div class="w-full px-6 md:px-16 lg:px-24 relative z-10 text-center">
                                    <div class="flex justify-center mb-8">
                                        <span
                                            class="inline-flex items-center gap-3 px-6 py-2 text-[11px] font-black tracking-[0.3em] text-blue-300 uppercase bg-white/5 backdrop-blur-xl rounded-full border border-white/10 shadow-2xl">
                                            <span class="relative flex h-3 w-3">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                                <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                                            </span>
                                            Rawat Inap Eksklusif
                                        </span>
                                    </div>

                                    <h1
                                        class="text-4xl md:text-6xl lg:text-8xl font-black text-white mb-8 transition-colors duration-500 tracking-tighter">
                                        {{ $title }}
                                    </h1>

                                <div
                                    class="max-w-4xl mx-auto backdrop-blur-md bg-white/5 dark:bg-black/20 p-6 md:p-12 rounded-[2rem] md:rounded-[3rem] border border-white/10 shadow-[0_32px_64px_-15px_rgba(0,0,0,0.5)]">
                                    <p
                                        class="text-blue-100/90 dark:text-blue-200/70 text-base md:text-xl lg:text-2xl leading-relaxed font-light italic mb-8 md:mb-10">
                                        "Kami menyiapkan ruang yang <span class="text-white font-semibold border-b-2 border-blue-400/30">tenang</span>
                                        bagi Anda, agar proses pulih terasa lebih <span
                                            class="text-white font-semibold border-b-2 border-blue-400/30">ringan</span> dan <span
                                            class="text-white font-semibold border-b-2 border-blue-400/30">penuh kehangatan.</span>"
                                    </p>

                                    <div
                                        class="flex flex-col md:inline-flex md:flex-row items-center justify-center md:justify-start gap-3 md:gap-4 px-6 md:px-8 py-4 md:py-3 rounded-2xl bg-white dark:bg-gray-900 border border-white/10 shadow-lg">

                                        <div class="flex items-center gap-2">
                                            <i class="ri-shield-check-line text-blue-500 dark:text-blue-400 text-xl"></i>
                                            <span
                                                class="text-gray-700 dark:text-white font-bold tracking-widest uppercase text-xs md:text-sm lg:text-base whitespace-nowrap">
                                                1 Kamar 1 Pasien
                                            </span>
                                        </div>

                                        <div class="h-px w-8 md:h-4 md:w-px bg-gray-300 dark:bg-gray-700"></div>

                                        <span
                                            class="text-blue-600/80 dark:text-blue-400/80 text-[10px] md:text-sm font-medium tracking-wide italic text-center md:text-left">
                                            Privasi sepenuhnya milik Anda.
                                        </span>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="w-full px-6 md:px-12 lg:px-20 relative -mt-20 z-20">
                                @livewire('layanan.daftar-kamar')
                            </div>

                            <div class="mt-32 w-full px-6 md:px-12 lg:px-20 bg-blue-100 dark:bg-slate-900/50 py-20 border-y border-blue-100 dark:border-blue-900/30">
                                <div class="w-full mb-16">
                                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 dark:text-white mb-4">Tata Tertib & Jam Besuk</h2>
                                    <div class="h-1.5 w-24 bg-blue-600 rounded-full mb-6"></div>
                                    <p class="text-gray-500 dark:text-slate-400 text-lg italic">"Demi kenyamanan dan percepatan pemulihan pasien, mohon perhatikan aturan kunjungan berikut."</p>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                                    <div class="lg:col-span-4 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-[3rem] p-10 text-white shadow-2xl relative overflow-hidden group">
                                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 blur-3xl group-hover:bg-white/20 transition-all duration-700"></div>

                                        <div class="relative z-10">
                                            <div class="bg-white/20 w-16 h-16 rounded-3xl flex items-center justify-center mb-8 backdrop-blur-md border border-white/20">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h3 class="text-3xl font-black mb-8 italic tracking-tight">Waktu Kunjungan</h3>

                                            <div class="space-y-8">
                                                <div class="border-l-4 border-white/30 pl-6">
                                                    <p class="text-blue-100 text-sm font-bold uppercase tracking-[0.2em] mb-2">Sesi Siang</p>
                                                    <p class="text-4xl font-black">11:00 — 13:00</p>
                                                    <p class="text-sm opacity-60 mt-1">Waktu Indonesia Barat</p>
                                                </div>
                                                <div class="border-l-4 border-white/30 pl-6">
                                                    <p class="text-blue-100 text-sm font-bold uppercase tracking-[0.2em] mb-2">Sesi Sore</p>
                                                    <p class="text-4xl font-black">17:00 — 19:00</p>
                                                    <p class="text-sm opacity-60 mt-1">Waktu Indonesia Barat</p>
                                                </div>
                                            </div>

                                            <div class="mt-12 p-6 bg-black/20 rounded-[2rem] border border-white/10 text-sm leading-relaxed backdrop-blur-sm">
                                                <span class="font-black text-blue-300 uppercase block mb-1">Penting:</span>
                                                Di luar jam tersebut, pasien diharapkan beristirahat total untuk pemulihan yang optimal.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-8 bg-white dark:bg-slate-900 rounded-[3rem] p-10 md:p-16 border border-slate-100 dark:border-slate-800 shadow-xl shadow-blue-900/5">
                                        <h3 class="text-3xl font-black text-slate-900 dark:text-white mb-12 flex items-center gap-4">
                                            Aturan Selama Menginap
                                            <span class="h-1 flex-grow bg-blue-50 dark:bg-slate-800 rounded-full"></span>
                                        </h3>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                                            @php
    $rules = [['01', 'Penunggu Pasien', 'Maksimal 1 orang penunggu yang diberikan kartu akses resmi.'], ['02', 'Batasan Usia', 'Anak di bawah usia 12 tahun tidak diperkenankan memasuki area rawat inap.'], ['03', 'Dilarang Merokok', 'Seluruh area rumah sakit adalah kawasan bebas asap rokok & vape.'], ['04', 'Ketenangan', 'Mohon menjaga ketenangan demi kenyamanan pasien lain di sekitar Anda.']];
                                            @endphp

                                            @foreach ($rules as $rule)
                                                <div class="flex gap-6 group">
                                                    <div class="flex-none w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-xl font-black shadow-lg shadow-blue-200 dark:shadow-none transition-transform group-hover:scale-110">
                                                        {{ $rule[0] }}
                                                    </div>
                                                    <div>
                                                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $rule[1] }}</h4>
                                                        <p class="text-gray-500 dark:text-slate-400 leading-relaxed">{{ $rule[2] }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="mt-16 flex items-start gap-5 p-6 bg-amber-50 dark:bg-amber-900/20 border border-amber-100 dark:border-amber-800/50 rounded-[2rem]">
                                            <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center flex-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <p class="text-sm text-amber-900 dark:text-amber-200 leading-relaxed font-medium">
                                                <span class="font-black uppercase block mb-1">Keamanan Barang:</span>
                                                Barang berharga adalah tanggung jawab pribadi. Rumah sakit tidak bertanggung jawab atas kehilangan barang di dalam ruang perawatan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full py-24 bg-gray-700 dark:bg-gray-900 text-white">
                                <div class="text-center mb-20">
                                    <h2 class="text-3xl md:text-5xl font-black mb-4 tracking-tight">Alur Rawat Inap</h2>
                                    <p class="text-blue-200 opacity-70 text-base md:text-lg">Proses mudah dan cepat untuk kenyamanan Anda.</p>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 relative max-w-7xl mx-auto">

                                    <div class="hidden md:block absolute top-8 left-[16.6%] right-[16.6%] z-0">
                                        <svg width="100%" height="2" viewBox="0 0 100 2" preserveAspectRatio="none">
                                            <path d="M0,1 L100,1" stroke="#3b82f6" stroke-width="2" stroke-dasharray="2 2" opacity="0.3"
                                                fill="none" />
                                        </svg>
                                    </div>

                                    <div class="relative text-center group z-10">
                                        <div class="md:hidden absolute top-16 left-1/2 -translate-x-1/2 h-12 w-px z-0">
                                            <div class="h-full w-full border-l-2 border-dashed border-blue-500/30"></div>
                                        </div>

                                        <div
                                            class="relative w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-black shadow-xl shadow-blue-500/30 scale-100 group-hover:scale-110 transition-transform duration-300 z-10">
                                            1
                                        </div>
                                        <h4 class="text-xl font-bold mb-3 text-white">Rekomendasi Dokter</h4>
                                        <p class="text-sm md:text-base text-blue-100/60 leading-relaxed max-w-xs mx-auto">Pasien mendapatkan surat
                                            pengantar rawat inap dari dokter spesialis melalui Poliklinik atau UGD.</p>
                                    </div>

                                    <div class="relative text-center group z-10">
                                        <div class="md:hidden absolute top-16 left-1/2 -translate-x-1/2 h-12 w-px z-0">
                                            <div class="h-full w-full border-l-2 border-dashed border-blue-500/30"></div>
                                        </div>

                                        <div
                                            class="relative w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-black shadow-xl shadow-blue-500/30 scale-100 group-hover:scale-110 transition-transform duration-300 z-10">
                                            2
                                        </div>
                                        <h4 class="text-xl font-bold mb-3 text-white">Registrasi & Pilih Kamar</h4>
                                        <p class="text-sm md:text-base text-blue-100/60 leading-relaxed max-w-xs mx-auto">Konfirmasi ketersediaan
                                            kamar di bagian admisi dan verifikasi asuransi/BPJS.</p>
                                    </div>

                                    <div class="relative text-center group z-10">
                                        <div
                                            class="relative w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-black shadow-xl shadow-blue-500/30 scale-100 group-hover:scale-110 transition-transform duration-300 z-10">
                                            3
                                        </div>
                                        <h4 class="text-xl font-bold mb-3 text-white">Masuk Ruang Perawatan</h4>
                                        <p class="text-sm md:text-base text-blue-100/60 leading-relaxed max-w-xs mx-auto">Petugas kami akan
                                            mengantar Anda menuju kamar yang telah disiapkan.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="mt-32 w-full px-6 md:px-12 lg:px-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                                <div>
                                    <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-6 tracking-tighter">Persiapan Rawat Inap</h2>
                                    <p class="text-gray-500 mb-8 leading-relaxed">Agar masa perawatan lebih nyaman, pastikan Anda menyiapkan beberapa kelengkapan pribadi berikut sebelum datang ke rumah sakit.</p>

                                    <ul class="space-y-4">
                                        <li class="flex items-center gap-3 dark:text-slate-300">
                                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Kartu Identitas (KTP) & Kartu Asuransi/BPJS
                                        </li>
                                        <li class="flex items-center gap-3 dark:text-slate-300">
                                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Pakaian ganti & perlengkapan ibadah
                                        </li>
                                        <li class="flex items-center gap-3 dark:text-slate-300">
                                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Hasil pemeriksaan lab/Rontgen sebelumnya (jika ada)
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-blue-100 dark:bg-blue-900/20 rounded-[3rem] p-12 text-center border-4 border-dashed border-blue-200 dark:border-blue-800">
                                    <h4 class="text-xl font-bold dark:text-white mb-2">Butuh Bantuan Cepat?</h4>
                                    <p class="text-sm text-gray-500 mb-6">Hubungi layanan admisi kami untuk cek ketersediaan kamar secara real-time.</p>
                                    <a href="https://wa.me/6281234567890?text=Assalamualaikum%2C%20saya%20ingin%20tanya%20ketersediaan%20kamar%20rawat%20inap." target="_blank" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-blue-500/30 transition-all duration-300 hover:bg-blue-700 hover:shadow-xl ">
                                        <i class="ri-whatsapp-line text-sm md:text-lg"></i>
                                        Hubungi Admisi
                                    </a>
                                </div>
                            </div>




                        </section>
                        {{-- <div class="fixed bottom-8 right-8 z-[100] group">
                            <div class="absolute bottom-full right-0 mb-4 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0 pointer-events-none">
                                <div class="bg-white dark:bg-slate-900 shadow-2xl rounded-2xl p-4 border border-blue-100 dark:border-slate-800 w-64">
                                    <p class="text-[10px] font-black uppercase tracking-widest text-blue-600 mb-1">Layanan Admisi</p>
                                    <p class="text-sm text-slate-900 dark:text-white font-bold leading-tight">Butuh info ketersediaan kamar hari ini?</p>
                                    <div class="mt-3 flex items-center gap-2 text-[10px] text-green-500 font-bold uppercase">
                                        <span class="relative flex h-2 w-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                        </span>
                                        Online Sekarang
                                    </div>
                                </div>
                            </div>

                            <a href="https://wa.me/6281234567890?text=Halo%20Admisi%2C%20saya%20ingin%20tanya%20ketersediaan%20kamar%20rawat%20inap."
                                target="_blank"
                                class="flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white p-4 md:px-6 md:py-4 rounded-[2rem] shadow-[0_20px_40px_-10px_rgba(34,197,94,0.4)] transition-all duration-300 hover:scale-105 active:scale-95 group">

                                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>

                                <span class="hidden md:block font-black uppercase text-xs tracking-widest">Hubungi Kami</span>
                            </a>
                        </div> --}}
@endsection
