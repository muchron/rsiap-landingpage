@extends('app')

@section('content')
    <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 mx-auto w-full md:p-0 px-10 md:mt-24 mt-16 ">
        <x-artikel.carousel />
        <div class="box -mt-8">
            <div class="w-full p-4 sm:p-8">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Artikel Terbaru</h5>
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Lihat Semua <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="dark:bg-gray-800 bg-green-200 p-7 rounded-xl">
                    <ul role="list" class="divide-blue-200dark:divide-gray-700">
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
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto md:p-0 px-6 w-full">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-extrabold text-green-600 dark:text-green-400">Semua Artikel</h1>
            <div class="flex gap-2">
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900"><i class="ri-filter-line"></i></span>
            </div>
        </div>
        <livewire:pages.artikel />
    </div>
@endsection

@push('scripts')
@endpush
