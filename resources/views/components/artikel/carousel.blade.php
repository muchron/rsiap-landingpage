<div class="box mt-2 mb-10">
    <div id="indicators-carousel" class="relative w-full" data-carousel="slide" data-carousel-interval="5000">
        <div class="relative h-64 overflow-hidden rounded-2xl md:h-[28rem] shadow-2xl">
            @foreach ($articles as $index => $article)
                <div class="hidden duration-1000 ease-in-out" data-carousel-item="{{ $loop->first ? 'active' : '' }}">

                    {{-- Image dengan Zoom effect saat aktif (opsional via CSS) --}}
                    <img src="{{ $article['cover'] }}"
                        class="absolute block w-full h-full object-cover transition-transform duration-700 scale-105"
                        alt="{{ $article['title'] }}">

                    {{-- Overlay Gradient yang lebih rich --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex items-end">
                        <div class="text-center md:text-left text-white pb-16 w-full px-6 md:px-12">
                            <div class="max-w-3xl">
                                {{-- Badge Kategori (Opsional) --}}
                                <span class="bg-green-500 text-[10px] uppercase tracking-widest font-bold px-2 py-1 rounded mb-3 inline-block">
                                    Artikel Kesehatan
                                </span>

                                {{-- Judul --}}
                                <a href="{{ route('artikel.read', $article['slug']) }}"
                                    class="block text-2xl md:text-4xl font-extrabold mb-3 hover:text-green-400 transition-colors duration-300 leading-tight">
                                    {{ $article['title'] }}
                                </a>

                                {{-- Deskripsi --}}
                                <p class="text-sm md:text-base text-gray-200 line-clamp-2 md:line-clamp-3 max-w-xl leading-relaxed">
                                    {{ Str::limit(strip_tags($article['body']), 120) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 bottom-5 left-1/2">
            @foreach ($articles as $index => $article)
                <button type="button"
                    class="w-2.5 h-2.5 rounded-full transition-all duration-300"
                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}"
                    data-carousel-slide-to="{{ $index }}">
                </button>
            @endforeach
        </div>

        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 group-hover:bg-white/40 transition-all">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/20 group-hover:bg-white/40 transition-all">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
            </span>
        </button>
    </div>
</div>
