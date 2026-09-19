@extends('app')

@section('title', 'Indikator Mutu |RISA Aisyiyah Pekajangan')
@section('meta_desc', 'Indikator Mutu NasionalRISA Aisyiyah Pekajangan Pekajangan')
@section('meta_title', 'Indikator Mutu')
@section('meta_image', asset('images/logo-rsia-aisyiyah.png'))

@push('styles')
    <style>
        .mutu-content p {
            margin-bottom: 1rem !important;
        }

        .mutu-content ul {
            list-style-type: disc !important;
            padding-left: 1.5rem !important;
        }

        .mutu-content ol {
            list-style-type: decimal !important;
            padding-left: 1.5rem !important;
        }

        .mutu-content li {
            margin-bottom: 0.5rem !important;
        }

        .mutu-content h1,
        .mutu-content h2,
        .mutu-content h3,
        .mutu-content h4,
        .mutu-content h5,
        .mutu-content h6 {
            margin-top: 1.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .mutu-content h1 {
            font-size: 2rem !important;
            line-height: 2.5rem !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
        }

        .mutu-content h2 {
            font-size: 1.75rem !important;
            line-height: 2.25rem !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
        }

        .mutu-content h3 {
            font-size: 1.5rem !important;
            line-height: 2rem !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
        }

        /* Dark Mode */
        .dark .mutu-content {
            color: #cbd5e1;
        }

        .dark .mutu-content h1,
        .dark .mutu-content h2,
        .dark .mutu-content h3,
        .dark .mutu-content h4,
        .dark .mutu-content h5,
        .dark .mutu-content h6 {
            color: #f1f5f9;
        }

        .dark .mutu-content strong {
            color: #f8fafc;
        }

        .dark .mutu-content a {
            color: #60a5fa;
        }

        .dark .mutu-content blockquote {
            color: #cbd5e1;
            border-color: #334155;
        }

        .dark .mutu-content hr {
            border-color: #334155;
        }

        .dark .mutu-content table {
            color: #cbd5e1;
        }

        .dark .mutu-content th {
            color: #f1f5f9;
        }
    </style>
@endpush


@section('content')

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <section
        class="relative overflow-hidden bg-gradient-to-br from-slate-50 via-white to-blue-50
               dark:from-gray-950 dark:via-gray-900 dark:to-slate-950">

        {{-- Decorative --}}
        <div
            class="absolute -right-32 -top-32 h-96 w-96 rounded-full
                   bg-blue-100/60 blur-3xl
                   dark:bg-blue-900/10"></div>

        <div
            class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full
                   bg-sky-100/60 blur-3xl
                   dark:bg-sky-900/10"></div>


        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                {{-- Badge --}}
                <div
                    class="mb-6 inline-flex items-center gap-2 rounded-full
                           border border-blue-100 bg-white px-4 py-2
                           text-sm font-medium text-blue-700 shadow-sm
                           dark:border-gray-700 dark:bg-gray-800/80
                           dark:text-blue-400">

                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-full
                               bg-blue-50
                               dark:bg-blue-900/30">

                        <svg
                            class="h-4 w-4 text-blue-700 dark:text-blue-400/70"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.04-.133-2.049-.382-3.016z" />
                        </svg>

                    </span>

                    Komitmen Mutu Pelayanan

                </div>


                {{-- Heading --}}
                <h1
                    class="text-4xl font-bold tracking-tight text-slate-900
                           sm:text-5xl lg:text-6xl
                           dark:text-white">

                    Indikator

                    <span class="text-blue-600 dark:text-blue-500">
                        Mutu
                    </span>

                </h1>


                {{-- Description --}}
                <p
                    class="mx-auto mt-6 max-w-2xl text-base leading-8
                           text-slate-600 sm:text-lg
                           dark:text-slate-400">

                    Transparansi dan komitmen RISA Aisyiyah Pekajangan dalam menjaga,
                    mengukur, serta meningkatkan kualitas pelayanan kesehatan
                    bagi setiap pasien.

                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CONTENT
    ========================================================== --}}
    <section class="bg-white py-16 dark:bg-gray-900 lg:py-24">

        <div class="mx-auto max-w-8xl px-6 lg:px-8">


            {{-- Section Header --}}
            <div
                class="mb-12 flex flex-col justify-between gap-5
                       md:flex-row md:items-end">

                <div>

                    <p
                        class="mb-2 text-sm font-semibold uppercase
                               tracking-widest text-blue-600 dark:text-blue-500">
                        Quality & Safety
                    </p>


                    <h2
                        class="text-3xl font-bold tracking-tight
                               text-slate-900 sm:text-4xl
                               dark:text-white">
                        Capaian Indikator Mutu Nasional
                    </h2>


                    <p
                        class="mt-3 max-w-2xl text-slate-500
                               dark:text-slate-400">
                        Kenali berbagai indikator yang menjadi bagian dari
                        upaya peningkatan mutu dan keselamatan pelayanan
                        di RISA Aisyiyah Pekajangan.
                    </p>

                </div>


                {{-- Total Indicator --}}
                <div
                    class="flex items-center gap-3 rounded-2xl
                           border border-slate-100 bg-slate-50 px-5 py-3
                           dark:border-gray-700 dark:bg-gray-800">

                    <div
                        class="flex h-10 w-10 items-center justify-center
                               rounded-xl bg-blue-600 text-white
                               dark:bg-blue-600/90">

                        <svg
                            class="h-5 w-5 text-white/90"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>

                    </div>


                    <div>

                        <p
                            class="text-xs font-medium text-slate-500
                                   dark:text-slate-400">
                            Total indikator
                        </p>

                        <p
                            class="font-bold text-slate-900
                                   dark:text-slate-100">
                            {{ count($indikatorMutu['data']) }} Indikator
                        </p>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                INDICATOR LIST
            ====================================================== --}}
            <div class="space-y-16">

                @forelse ($indikatorMutu['data'] as $key =>$item)
                    <article class="group">

                        <div class="flex flex-col gap-8 md:flex-row md:items-start lg:gap-12">

                            {{-- GAMBAR KIRI --}}
                            <div class="w-full shrink-0 md:w-80 lg:w-[560px]">

                                <div class="overflow-hidden rounded-2xl bg-slate-100 dark:bg-gray-800">

                                    <img
                                        src="{{ $item['image'] }}"
                                        alt="{{ $item['name'] }}"
                                        loading="lazy"
                                        class="w-full object-cover transition duration-500 group-hover:scale-[1.02]">

                                </div>

                            </div>


                            {{-- TEKS KANAN --}}
                            <div class="min-w-0 flex-1">
                                {{-- Judul --}}
                                <h2
                                    class="text-2xl font-bold leading-tight tracking-tight
                               text-blue-600 sm:text-3xl
                               dark:text-white">
                                    {{ $key + 1 }}. {{ $item['name'] }}
                                </h2>


                                {{-- Deskripsi --}}
                                @if (!empty($item['description']))
                                    <p
                                        class="mt-4 text-sm font-base leading-6
                                   text-slate-400 dark:text-slate-500">
                                        {{ $item['description'] }}
                                    </p>
                                @endif


                                {{-- Isi --}}
                                <div
                                    class="mutu-content prose prose-slate mt-5 max-w-none
                               text-justify leading-6
                               prose-p:mb-4
                               prose-headings:font-semibold
                               prose-ul:my-4
                               prose-ol:my-4
                               prose-li:my-1
                               dark:prose-invert dark:prose-headings:text-white dark:prose-p:text-slate-400">
                                    {!! $item['content'] !!}
                                </div>

                            </div>

                        </div>


                        {{-- PEMISAH --}}
                        @if (!$loop->last)
                            <div class="mt-16 border-t border-slate-100 dark:border-gray-800"></div>
                        @endif

                    </article>

                @empty

                    <div class="py-20 text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center
                       rounded-2xl bg-slate-100 dark:bg-gray-800">
                            <svg
                                class="h-8 w-8 text-slate-400 dark:text-slate-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a2 2 0 012 2v12a2 2 0 01-2 2H7z" />
                            </svg>
                        </div>

                        <h3 class="mt-5 text-lg font-bold text-slate-900 dark:text-white">
                            Belum Ada Data
                        </h3>

                        <p class="mx-auto mt-2 max-w-md text-sm text-slate-500 dark:text-slate-400">
                            Data indikator mutu belum tersedia.
                            Silakan kembali lagi nanti.
                        </p>

                    </div>
                @endforelse

            </div>

        </div>

    </section>


    {{-- =========================================================
        CTA
    ========================================================== --}}
    <section
        class="relative overflow-hidden bg-blue-700
               dark:bg-blue-950">

        {{-- Decorative --}}
        <div class="absolute inset-0">

            <div
                class="absolute -right-20 -top-20 h-80 w-80
                       rounded-full bg-white/10 dark:bg-blue-400/5"></div>

            <div
                class="absolute -bottom-32 -left-20 h-96 w-96
                       rounded-full bg-blue-900/20 dark:bg-black/20"></div>

        </div>


        <div
            class="relative mx-auto max-w-7xl px-6 py-16
                   lg:px-8">

            <div
                class="flex flex-col items-center justify-between gap-8
                       text-center md:flex-row md:text-left">

                <div class="max-w-2xl">

                    <p
                        class="text-sm font-semibold uppercase
                               tracking-widest text-blue-200
                               dark:text-blue-300/80">
                        RISA Aisyiyah Pekajangan
                    </p>


                    <h2
                        class="mt-2 text-3xl font-bold text-white
                               sm:text-4xl">
                        Bersama menjaga mutu pelayanan kesehatan
                    </h2>


                    <p
                        class="mt-4 leading-7 text-blue-100
                               dark:text-blue-200/80">
                        Kami berkomitmen memberikan pelayanan yang aman,
                        berkualitas, profesional, dan berorientasi pada
                        kebutuhan pasien.
                    </p>

                </div>


                <a
                    href="{{ url('/') }}"
                    class="inline-flex shrink-0 items-center gap-2
                           rounded-xl bg-white px-6 py-3.5
                           text-sm font-semibold text-blue-700
                           shadow-lg transition
                           hover:bg-blue-50
                           dark:bg-gray-800 dark:text-blue-400
                           dark:hover:bg-gray-700">

                    Kembali ke Beranda

                    <svg
                        class="h-4 w-4 text-blue-700 dark:text-blue-400/80"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>

                </a>

            </div>

        </div>

    </section>

@endsection
