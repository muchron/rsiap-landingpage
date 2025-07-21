@extends('app')

{{-- @dd($data) --}}
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
                    <ul role="list" class="divide-y divide-green-400 dark:divide-gray-700">
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
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 gap-8 justify-center py-6">
            @foreach ($artikels['data'] as $artikel)
                <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                    <div class="card-image">
                        <a href="#">
                            <img src="{{ $artikel['cover'] }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                        </a>
                    </div>
                    <div class="card-content p-6">
                        <div class="card-title">
                            <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                                <a href="#">{{ $artikel['title'] }}</a>
                            </p>
                            <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> {{ Carbon\Carbon::parse($artikel['created_at'])->format('d F Y') }}<i class="ri-user-line"></i> {{ $artikel['author'] }}</p>
                        </div>
                        <div class="card-body mt-3">
                            <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                                {{ $artikel['body'] }}
                            </p>
                            <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    <div class="container mx-auto flex justify-center w-full p-6 items-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
                <ul class="inline-flex items-center -space-x-px text-sm rtl:space-x-reverse">
                    @foreach ($artikels['meta']['links'] as $link)
                        <li>
                            <a
                                href="{{ $link['url'] ?? '#' }}"
                                class="flex items-center justify-center px-3 h-8 leading-tight 
                    {{ $link['active'] ? 'text-white bg-blue-500 border-blue-500' : 'text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700' }} 
                    border border-e-0 first:rounded-s-lg last:rounded-e-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white 
                    {{ is_null($link['url']) ? 'pointer-events-none opacity-50' : '' }}"
                                {!! $link['label'] === '&laquo; Previous' || $link['label'] === 'Next &raquo;' ? 'aria-label="' . strip_tags($link['label']) . '"' : '' !!}>
                                {!! $link['label'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>

                {{-- <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li> --}}
            </ul>
        </nav>
    </div>
@endsection

@push('scripts')
@endpush
