@extends('app')

@section('content')
    <div id="carrousel">
        <x-beranda.carousel />
    </div>

    <div id="poliklinik" class="mt-10">
        <livewire:beranda.filter-poliklinik />
    </div>

    <div id="artikel" class="">
        <x-beranda.artikel />
    </div>
    <section class="relative py-20 bg-white dark:bg-gray-900 overflow-hidden">

        <!-- Background Decoration -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 right-0 w-72 h-72 bg-pink-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container relative mx-auto px-6 lg:px-12">

            <!-- Heading -->
            <div class="max-w-3xl mx-auto text-center mb-12">

                <h2 class="mt-5 text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                    Ikuti Aktivitas
                    <span class="bg-gradient-to-r from-pink-500 via-purple-500 to-orange-500 bg-clip-text text-transparent">
                        RSIA Aisyiyah Pekajangan
                    </span>
                </h2>

                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Dapatkan informasi terbaru seputar layanan, edukasi kesehatan,
                    kegiatan rumah sakit, hingga momen kebersamaan bersama kami.
                </p>

            </div>

            <!-- Instagram Feed -->
            <div
                class="rounded-3xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-xl overflow-hidden p-6">

                <script src="https://elfsightcdn.com/platform.js" async></script>

                <div class="elfsight-app-c0d47815-747a-4f34-94b6-83fe2e50e85b" data-elfsight-app-lazy>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-10">

                <a href="https://instagram.com/rsia_aisyiyah_pekajangan" target="_blank"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gradient-to-r from-pink-500 via-purple-500 to-orange-500 text-white font-semibold shadow-lg hover:scale-105 transition duration-300">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5Zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5Zm8.75 1.25a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-4.25 1A6.25 6.25 0 1 0 18.5 12 6.257 6.257 0 0 0 12.25 5.75Zm0 1.5A4.75 4.75 0 1 1 7.5 12a4.756 4.756 0 0 1 4.75-4.75Z" />
                    </svg>

                    Kunjungi Instagram Kami

                </a>

            </div>

        </div>

    </section>

    <div id="layanan">
        <x-beranda.layanan />
    </div>
    <section
        class="relative overflow-hidden bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-950 py-20">
        <!-- Background Decoration -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl">
            </div>
            <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-cyan-500/10 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container relative mx-auto px-6 lg:px-12">

            <!-- Heading -->
            <div class="max-w-3xl mx-auto text-center mb-12">


                <h2 class="mt-5 text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                    Apa Kata Mereka Tentang
                    <span class="text-blue-600">RSIA Aisyiyah Pekajangan</span>
                </h2>

                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Kepuasan dan kepercayaan pasien menjadi prioritas kami.
                    Simak pengalaman mereka melalui ulasan Google berikut.
                </p>
            </div>

            <!-- Review Card -->
            <div
                class="rounded-3xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-xl p-6 md:p-8">

                <script src="https://elfsightcdn.com/platform.js" async></script>

                <div class="elfsight-app-b7215d4f-64b7-4f67-9154-50e8af9ea560" data-elfsight-app-lazy>
                </div>

            </div>

        </div>
    </section>

    <div class="mx-auto w-full">

        <div
            class="w-full h-[500px] overflow-hidden
                                                                                                        dark:grayscale dark:invert dark:brightness-90">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50782.75122370396!2d109.63267365631181!3d-6.940885519766223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7021431da6a5c7%3A0xa27e71c67601f470!2sRSIA%20Aisyiyah%20Pekajangan!5e0!3m2!1sid!2sid!4v1736173371324!5m2!1sid!2sid"
                class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>
@endsection

@push('scripts')
@endpush