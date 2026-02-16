@extends('app')

@section('content')
    <main class="container mx-auto w-full grid grid-cols-1 gap-8 md:grid-cols-2">

        <x-artikel.carousel />

        <div class="box -mt-8">
            <div class="w-full p-4 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">
                        Artikel Terbaru
                    </h5>
                </div>

                <div class="bg-green-100 dark:bg-gray-800 p-5 rounded-xl">
                    <ul role="list" class="divide-y divide-green-200 dark:divide-gray-700">
                        @forelse ($newArticles as $item)
                            <li class="py-4 first:pt-0 last:pb-0">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-12 h-12 rounded-xl object-cover shadow-sm dark:brightness-[0.6] dark:contrast-[1.1]"
                                            src="{{ $item['cover'] }}"
                                            alt="{{ $item['title'] }}">
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <p class="text-xs font-semibold text-green-700 dark:text-green-400 uppercase tracking-wider">
                                            {{ $item['category']['name'] }}
                                        </p>

                                        <a href="{{ route('artikel.read', $item['slug']) }}"
                                            class="block text-lg font-bold text-gray-800 dark:text-white hover:text-green-600 transition-colors duration-200 leading-tight"
                                            wire:navigate>
                                            {{ $item['title'] }}
                                        </a>

                                        <div class="flex items-center gap-4 mt-1 text-xs text-gray-500 dark:text-gray-400">
                                            <span class="flex items-center gap-1">
                                                <i class="ri-calendar-line"></i> 08 Januari 2025
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <i class="ri-user-line"></i> {{ $item['author'] }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="text-center text-gray-500 py-4">Belum ada artikel terbaru.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <section class="container mx-auto w-full px-6 md:px-0 my-2">
        <livewire:pages.artikel />
    </section>
@endsection
