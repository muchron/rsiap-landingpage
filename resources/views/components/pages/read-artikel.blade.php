@extends('app')

@push('styles')
    <style>
        .article-content p {
            margin-bottom: 1.5rem !important;

        }

        .article-content blockquote {
            margin-bottom: 1.5rem !important;
            margin-left: 2rem !important;
            margin-right: 2rem !important;
            padding: 2rem !important;
            border: gray;
            background-color: #e6e6e6 !important;
            font-style: italic !important;
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
    <div class="container mx-auto px-6 lg:px-10 py-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

            <!-- ================= Artikel ================= -->
            <article class="lg:col-span-8">

                <div id="info_artikel">
                    <h1 class="text-3xl font-extrabold text-blue-600 dark:text-blue-400">
                        {{ $artikel['title'] }}
                    </h1>
                </div>

                <div class="mt-5">

                    <div class="flex justify-between text-sm text-gray-500 mb-3">

                        <span>
                            <i class="ri-calendar-line"></i>
                            {{ Carbon\Carbon::parse($artikel['created_at'])->format('d F Y') }}
                        </span>

                        <span>
                            <i class="ri-user-line"></i>
                            {{ $artikel['author'] }}
                        </span>

                    </div>

                    <img src="{{ $artikel['cover'] }}" alt="{{ $artikel['title'] }}"
                        class="w-full aspect-[21/9] object-cover rounded-xl shadow-lg">

                </div>

                <div class="article-content mt-8 lg:text-justify [&>ul]:list-disc [&>ul]:ml-6 [&>ul]:mb-4">

                    {!! $artikel['body'] !!}

                </div>

                <div class="mt-8">
                    <x-badge>
                        @foreach ($artikel['labels'] as $label => $value)
                            <x-badge-link size="small">
                                {{ $value['name'] }}
                            </x-badge-link>
                        @endforeach
                    </x-badge>
                </div>

            </article>

            <!-- ================= Sidebar ================= -->
            <aside class="hidden lg:block lg:col-span-4">

                <div class="sticky top-24 space-y-6">
                    <!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
                    <script src="https://elfsightcdn.com/platform.js" async></script>
                    <div class="elfsight-app-c0d47815-747a-4f34-94b6-83fe2e50e85b" data-elfsight-app-lazy></div>
                    <!-- Banner 1 -->
                    <!-- Elfsight Google Reviews | Untitled Google Reviews -->
                    <script src="https://elfsightcdn.com/platform.js" async></script>
                    <div class="elfsight-app-b7215d4f-64b7-4f67-9154-50e8af9ea560" data-elfsight-app-lazy></div>

                </div>

            </aside>

        </div>

    </div>
    <div class="bg-blue-100 h-full w-full md:p-10 px-5 py-5 md:mt-10 mt-5 dark:bg-gray-800">

        <div class="container mx-auto w-full">
            <div class="flex items-center justify-between mb-6">
                <h5 class="text-xl font-bold text-gray-900 dark:text-white">Artikel Lainnya</h5>
                <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    Lihat Semua <i class="ri-arrow-right-line"></i>
                </a>
            </div>


            <livewire:pages.sub.related-articles :slug="$artikel['category']['slug']" />

        </div>
    </div>
@endsection
@push('scripts')
@endpush