@extends('app')

@section('content')
    <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 mx-auto w-full md:p-0 px-10 md:mt-24 mt-16 ">
        <x-artikel.carousel />
        <div class="box -mt-8">
            <div class="w-full p-4 sm:p-8">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Artikel Terbaru</h5>
                    {{-- <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Lihat Semua <i class="ri-arrow-right-line"></i>
                    </a> --}}
                </div>
                <div class="dark:bg-gray-800 bg-green-100 p-7 rounded-xl">

                    <ul role="list" class="divide-green-200 dark:divide-gray-700">
                        @forelse ($newArticles as $item)
                            <li class="py-2 sm:py-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-xl object-cover" src="{{ $item['cover'] }}" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                            {{ $item['category']['name'] }}
                                        </p>
                                        <a href="{{ route('artikel.read', $item['slug']) }}" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900" wire:navigate>
                                            {{ $item['title'] }}
                                        </a>
                                        <div class="flex justify-between text-xs text-gray-500 truncate dark:text-gray-400">
                                            <p class="">
                                                <i class="ri-calendar-line"></i> 08 Januari 2025
                                            </p>
                                            <p>
                                                <i class="ri-user-line"></i> {{ $item['author'] }}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        @empty
                        @endforelse

                        {{-- <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li> --}}

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto md:p-0 px-6 w-full">
        <livewire:pages.artikel />
    </div>
@endsection

@push('scripts')
@endpush
