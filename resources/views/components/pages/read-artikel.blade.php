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
            color: #22c55e !important;
        }

        /* darkmoode styling */
        .dark .article-content blockquote {
            background-color: #1f2937 !important;
            color: #e6e6e6 !important;
        }

        .dark .article-content a {
            color: #4ade80 !important;
        }

        .dark .article-content h1,
        .dark .article-content h2,
        .dark .article-content h3,
        .dark .article-content h4,
        .dark .article-content h5,
        .dark .article-content h6 {
            color: #e6e6e6 !important;
        }

        .dark .article-content p {
            color: #e6e6e6 !important;
        }
    </style>
@endpush
@section('content')
    <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 mx-auto w-full md:p-0 px-10 md:mt-24 mt-16 ">
        <div>
            <img class="h-auto w-full rounded-lg" src="{{ $artikel['cover'] }}" alt="image {{ $artikel['title'] }}">
        </div>
        <div>
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Artikel Terkait</h5>
                <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    Lihat Semua <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <livewire:pages.sub.related-articles :slug="$artikel['category']['slug']" />
        </div>
    </div>
    <div class="container grid grid-cols-4 gap-4 mx-auto w-full md:p-0 px-10 md:mt-10 mt-5">
        <div class="col-span-3">
            <div id="info_artikel">
                <x-badge-link size="large" class="mb-2">
                    {{ Str::upper($artikel['category']['name']) }}
                </x-badge-link>
                <h1 class="text-3xl font-extrabold text-green-600 dark:text-green-400">{{ $artikel['title'] }}</h1>
                <p class="text-sm text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> {{ Carbon\Carbon::parse($artikel['created_at'])->format('d F Y') }}<i class="ri-user-line"></i> {{ $artikel['author'] }}</p>
                <x-badge>
                    @foreach ($artikel['labels'] as $label => $value)
                        <x-badge-link size="small">{{ $value['name'] }}</x-badge-link>
                    @endforeach
                </x-badge>
            </div>
            <div class="article-content text-justify">
                <p class="text-justify">{!! $artikel['body'] !!}</p>

            </div>

        </div>
        <div class="col-span-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aperiam quae voluptates fugiat repellendus! Tempora cum sed deserunt amet! Laborum alias saepe corrupti facilis suscipit reprehenderit minima voluptas maxime nobis!</p>
        </div>
    </div>
    {{-- <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 mx-auto w-full md:p-0 px-10 md:mt-24 mt-16 ">
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aperiam quae voluptates fugiat repellendus! Tempora cum sed deserunt amet! Laborum alias saepe corrupti facilis suscipit reprehenderit minima voluptas maxime nobis!
        </div>
    </div> --}}
@endsection
@push('scripts')
@endpush
