@push('styles')
    <style>
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .skeleton {
            background: linear-gradient(90deg,
                    #e5e7eb 25%,
                    #f3f4f6 50%,
                    #e5e7eb 75%);
            background-size: 1000px 100%;
            animation: shimmer 1.6s infinite linear;
        }

        .dark .skeleton {
            background: linear-gradient(90deg,
                    #374151 25%,
                    #4b5563 50%,
                    #374151 75%);
        }
    </style>
@endpush
<div class="relative">

    {{-- ============================= --}}
    {{-- CATEGORY FILTER --}}
    {{-- ============================= --}}
    <div class="flex items-center gap-3 mb-6 flex-wrap">

        <span class="font-semibold text-gray-800 dark:text-gray-200 text-sm">
            Kategori Artikel :
        </span>

        <button
            wire:click="filterCategory(null)"
            class="px-3 py-2 rounded-lg text-xs font-semibold transition-all duration-300
            {{ $category === null ? 'bg-green-600 text-white shadow-md scale-105' : 'bg-gray-100 hover:bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 hover:scale-105' }}">
            Semua
        </button>
        @foreach ($categories as $item)
            <button
                wire:click="filterCategory('{{ $item['slug'] }}')"
                class="px-3 py-2 rounded-lg text-xs font-semibold transition-all duration-300
                {{ $category === $item['slug'] ? 'bg-green-600 text-white shadow-md scale-105' : 'bg-gray-100 hover:bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 hover:scale-105' }}">
                {{ $item['name'] }}
            </button>
        @endforeach

    </div>
    <div wire:loading.delay
        wire:target="filterCategory"
        class="absolute inset-0 flex items-center justify-center bg-white/70 dark:bg-gray-900/70 backdrop-blur-sm z-20 transition-opacity duration-300 rounded-xl">

        <div class="text-center">
            <div class="w-12 h-12 border-4 border-green-600 border-t-transparent rounded-full animate-spin mx-auto"></div>
            <p class="mt-3 text-sm text-gray-600 dark:text-gray-300">
                Memuat artikel...
            </p>
        </div>

    </div>
    <div wire:loading.class="opacity-40"
        wire:target="filterCategory"
        class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 py-6 transition-all duration-500">

        @forelse ($artikels as $artikel)
            <div class="shadow-md rounded-xl border border-gray-300 dark:border-gray-600
                        transition-all duration-500 hover:scale-105 hover:shadow-xl bg-white dark:bg-gray-800">

                <div>
                    <a href="{{ route('artikel.read', $artikel['slug']) }}">
                        <img src="{{ $artikel['cover'] }}"
                            class="w-full h-[200px] rounded-t-xl object-cover transition-transform duration-500 dark:brightness-[0.6] dark:contrast-[1.1]">
                    </a>
                </div>

                <div class="p-6">

                    <p class="text-xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900 leading-tight transition-colors duration-300">
                        <a href="{{ route('artikel.read', $artikel['slug']) }}" wire:navigate>
                            {{ $artikel['title'] }}
                        </a>
                    </p>

                    <div class="flex justify-between text-xs text-gray-400 dark:text-gray-500">
                        <p>
                            <i class="ri-calendar-line"></i>
                            {{ Carbon\Carbon::parse($artikel['created_at'])->format('d F Y') }}
                        </p>
                        <p>
                            <i class="ri-book-line"></i>
                            Dibaca : {{ $artikel['views'] }}x
                        </p>
                    </div>

                    <p class="text-sm text-gray-500 dark:text-white text-justify mt-3 leading-relaxed">
                        {{ Str::limit(strip_tags($artikel['body']), 150) }}
                    </p>

                    <a href="{{ route('artikel.read', $artikel['slug']) }}"
                        class="inline-block mt-4 text-sm font-medium text-white px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg transition-all duration-300 hover:scale-105" wire:navigate>
                        Lanjutkan Membaca
                    </a>

                </div>

            </div>
        @empty
            <div class="col-span-full flex justify-center">
                <div class="flex flex-col items-center text-center
                    bg-green-50 dark:bg-gray-800
                    border border-green-400 dark:border-green-600 
                    rounded-xl px-8 py-10 shadow-md
                    w-2xl w-full animate-fadeIn">

                    {{-- Icon Warning --}}
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-16 h-16 text-green-500 dark:text-green-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v4m0 4h.01M4.93 19h14.14c1.54 0 2.5-1.67
                         1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46
                         0L3.2 16c-.77 1.33.19 3 1.73 3z" />
                    </svg>

                    <h3 class="text-lg font-semibold text-green-700 dark:text-green-400">
                        Artikel Belum Tersedia
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-2 leading-relaxed">
                        Saat ini belum ada artikel pada kategori yang dipilih.
                        Silakan pilih kategori lain atau kembali lagi nanti.
                    </p>

                    <button
                        wire:click="filterCategory(null)"
                        class="mt-5 px-4 py-2 text-sm font-medium
                       bg-green-500 hover:bg-green-600
                       text-white rounded-lg transition-all duration-300
                       hover:scale-105 shadow">
                        Lihat Semua Artikel
                    </button>

                </div>
            </div>
        @endforelse

    </div>


    {{-- ============================= --}}
    {{-- PAGINATION --}}
    {{-- ============================= --}}
    <div class="mt-8 flex flex-col lg:flex-row justify-between items-center gap-4 transition-opacity duration-300">

        <div class="text-sm text-gray-500 dark:text-gray-400">
            Showing
            <span class="font-medium">{{ $artikels->firstItem() }}</span>
            –
            <span class="font-medium">{{ $artikels->lastItem() }}</span>
            of
            <span class="font-medium">{{ $artikels->total() }}</span>
            results
        </div>

        <div>
            {{ $artikels->links() }}
        </div>

    </div>

</div>
