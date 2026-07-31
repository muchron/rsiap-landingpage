@extends('app')

@push('styles')
    <style>
        .article-content p {
            margin-bottom: 1rem !important;
        }

        .article-content blockquote {
            margin-bottom: 1.5rem !important;
            margin-x: 0.5rem !important;
            padding: 1.5rem !important;
            border: 1px solid rgb(162, 232, 255);
            background-color: #e1f2ff !important;
            font-style: italic !important;
            border-radius: 1.5rem !important;
        }

        .article-content h1,
        .article-content h2,
        .article-content h3,
        .article-content h4,
        .article-content h5,
        .article-content h6 {
            margin-bottom: 1rem !important;
        }

        .article-content a {
            color: #227cc5 !important;
        }

        /* darkmoode styling */
        .dark .article-content blockquote {
            background-color: #1f2937 !important;
            color: #e6e6e6 !important;
        }

        .dark .article-content a {
            color: #49a9f8 !important;
        }

        .dark .article-content h1,
        .dark .article-content h2,
        .dark .article-content h3,
        .dark .article-content h4,
        .dark .article-content h5,
        .dark .article-content h6 {
            color: #d0d0d0 !important;
        }

        .dark .article-content p {
            color: #d0d0d0 !important;
        }

        /* buatkan untuk styling font header */
        .article-content h1 {
            font-size: 1.875rem !important;
            line-height: 2.5rem !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
        }

        .article-content h2 {
            font-size: 1.5rem !important;
            line-height: 2.25rem !important;
            font-weight: 600 !important;
            /* create upper case */
            text-transform: uppercase !important;

        }

        .article-content h3 {
            font-size: 1.25rem !important;
            line-height: 2rem !important;
            /* buat bold */
            font-weight: 600 !important;
            text-transform: uppercase !important;
        }
    </style>
@endpush

@section('meta_desc', Carbon\Carbon::parse($artikel['created_at'])->translatedFormat('d F Y') . " | " . Str::limit(strip_tags($artikel['body']), 200))
@section('meta_title', "Artikel & Berita RSIA Aisyiyah Pekajangan | " . $artikel['title'])
@section('meta_image', $artikel['cover'])

@section('content')
    <section class="bg-gray-50 dark:bg-gray-950 py-10">

        <div class="container mx-auto px-5 lg:px-10">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 xl:gap-10">

                {{-- ================= Artikel ================= --}}
                <article
                    class="lg:col-span-8 relative overflow-hidden rounded-3xl
                                                                                                                                                bg-white dark:bg-gray-900
                                                                                                                                                border border-gray-100 dark:border-gray-800
                                                                                                                                                shadow-lg">

                    {{-- Accent --}}
                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-600"></div>

                    <div class="p-6 md:p-8">

                        {{-- Judul --}}
                        <header>

                            <h1 class="text-2xl lg:text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                {{ $artikel['title'] }}
                            </h1>

                            <div
                                class="mt-4 flex flex-col sm:flex-row sm:items-center gap-3 text-sm text-gray-500 dark:text-gray-400">

                                <span class="flex items-center gap-2">
                                    <i class="ri-calendar-line text-blue-500"></i>
                                    {{ Carbon\Carbon::parse($artikel['created_at'])->translatedFormat('d F Y') }}
                                </span>

                                <span class="hidden sm:block">•</span>

                                <span class="flex items-center gap-2">
                                    <i class="ri-user-line text-blue-500"></i>
                                    {{ $artikel['author'] }}
                                </span>

                            </div>

                        </header>

                        {{-- Cover --}}
                        <div class="mt-6 overflow-hidden rounded-2xl">

                            <img src="{{ $artikel['cover'] }}" alt="{{ $artikel['title'] }}"
                                class="w-full aspect-[21/10] lg:aspect-[21/9] object-cover transition duration-500 hover:scale-[1.02]">

                        </div>
                        @php
                            $url = route('artikel.read', $artikel['slug']);
                        @endphp
                        <div class="my-5 border-b border-gray-200 dark:border-gray-700 pt-6">

                            <h4 class="font-semibold text-gray-900 dark:text-white mb-4">
                                Bagikan Artikel
                            </h4>

                            <div class="flex flex-wrap gap-3 mb-4">

                                {{-- Copy Link --}}
                                <button x-data @click="
                                                                                                                            navigator.clipboard.writeText('{{ $url }}');
                                                                                                                            $el.innerText='Tersalin!';
                                                                                                                            setTimeout(()=>$el.innerText='Salin Link',1500)
                                                                                                                        "
                                    class="text-xs inline-flex items-center gap-2 rounded-xl bg-gray-100 dark:bg-gray-700 px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 transition">

                                    <i class="ri-links-line"></i>

                                    Salin Link

                                </button>

                                {{-- WhatsApp --}}
                                <a target="_blank"
                                    href="https://wa.me/?text={{ urlencode($artikel['title'] . ' ' . $url) }}"
                                    class="text-xs inline-flex items-center gap-2 rounded-xl bg-green-500 text-white px-2 py-1 hover:bg-green-600 transition">

                                    <i class="ri-whatsapp-line"></i>

                                    WhatsApp

                                </a>

                                {{-- Facebook --}}
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
                                    class="text-xs inline-flex items-center gap-2 rounded-xl bg-blue-600 text-white px-2 py-1 hover:bg-blue-700">

                                    <i class="ri-facebook-fill"></i>

                                    Facebook

                                </a>

                                {{-- X --}}
                                <a target="_blank"
                                    href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($artikel['title']) }}"
                                    class="text-xs inline-flex items-center gap-2 rounded-xl bg-black text-white px-4 py-2">

                                    <i class="ri-twitter-x-fill"></i>

                                    X

                                </a>

                                {{-- Telegram --}}
                                <a target="_blank"
                                    href="https://t.me/share/url?url={{ urlencode($url) }}&text={{ urlencode($artikel['title']) }}"
                                    class="text-xs inline-flex items-center gap-2 rounded-xl bg-sky-500 text-white px-2 py-1">

                                    <i class="ri-telegram-fill"></i>

                                    Telegram

                                </a>

                            </div>

                        </div>


                        {{-- Isi Artikel --}}
                        <div class="article-content mt-8
                                                                                            text-[15px] leading-8
                                                                                            lg:text-[17px]
                                                                                            text-gray-700 dark:text-gray-300

                                                                                            [&_ul]:list-disc
                                                                                            [&_ul]:ml-6
                                                                                            [&_ul]:space-y-2

                                                                                            [&_ol]:list-decimal
                                                                                            [&_ol]:ml-6
                                                                                            [&_ol]:space-y-2

                                                                                            [&_h2]:text-2xl
                                                                                            [&_h2]:font-bold
                                                                                            [&_h2]:mt-8
                                                                                            [&_h2]:mb-4
                                                                                            [&_h2]:text-gray-900
                                                                                            dark:[&_h2]:text-white

                                                                                            [&_h3]:text-xl
                                                                                            [&_h3]:font-semibold
                                                                                            [&_h3]:mt-6
                                                                                            [&_h3]:mb-3

                                                                                            [&_p]:mb-5
                                                                                            [&_img]:rounded-xl
                                                                                            [&_img]:my-6
                                                                                            [&_a]:text-blue-600
                                                                                            dark:[&_a]:text-blue-400">

                            {!! $artikel['body'] !!}

                        </div>

                        {{-- Label --}}
                        @if(count($artikel['labels']))
                            <div class="mt-10 pt-6 border-t border-gray-200 dark:border-gray-700">

                                <x-badge>

                                    @foreach($artikel['labels'] as $value)

                                        <x-badge-link size="small">
                                            #{{ $value['name'] }}
                                        </x-badge-link>

                                    @endforeach

                                </x-badge>

                            </div>
                        @endif

                    </div>

                </article>

                {{-- ================= Sidebar ================= --}}
                <aside class="hidden lg:block lg:col-span-4">

                    <div class="sticky top-24">

                        <livewire:pages.sub.article-sidebar :current-category="$artikel['category']['slug']"
                            :current-article="$artikel['slug']" />

                    </div>

                </aside>

            </div>

        </div>

    </section>

    {{-- ================= Artikel Lainnya ================= --}}
    <section class="bg-blue-50 dark:bg-gray-900 border-t border-blue-100 dark:border-gray-800 py-12">

        <div class="container mx-auto px-5 lg:px-10">

            <div class="flex items-center justify-between mb-8">

                <div>

                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                        Artikel Lainnya
                    </h2>

                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Temukan artikel kesehatan lainnya yang mungkin bermanfaat.
                    </p>

                </div>

                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">

                    Lihat Semua
                    <i class="ri-arrow-right-line"></i>

                </a>

            </div>

            <livewire:pages.sub.related-articles :slug="$artikel['category']['slug']" />

        </div>

    </section>
@endsection
@push('scripts')
@endpush