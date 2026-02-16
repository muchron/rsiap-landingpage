<div id="default-carousel" class="relative w-full z-0 -mt-4" data-carousel="slide" data-carousel-interval="5000" wire:ignore>
    <div class="relative w-full aspect-[21/7] md:aspect-[21/9] min-h-[550px] md:min-h-[600px] overflow-hidden">
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('images/rsia-aisyiyah-pekajangan.jpg') }}"
                class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="Hero RSIA">
            <div class="absolute inset-0 bg-gradient-to-r 
    from-white/100 via-white/80 to-transparent 
    dark:from-black/95 dark:via-black/70 dark:to-transparent">
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="container mx-auto px-6 lg:px-12 flex items-center justify-center lg:grid lg:grid-cols-2 gap-10">
                    {{-- Konten Utama --}}
                    <div class="dark:text-white text-gray-800 space-y-4 md:space-y-6 text-center lg:text-left flex flex-col items-center lg:items-start">

                        {{-- Text 1 --}}
                        <p class="text-2xl md:text-5xl lg:text-6xl font-bold leading-tight">
                            Selamat Datang di
                        </p>

                        {{-- Nama RS: Ukuran diturunkan di mobile agar tidak pecah --}}
                        <p class="dark:text-green-400 text-green-700 block font-extrabold text-4xl md:text-7xl lg:text-8xl leading-none tracking-tight">
                            RSIA Aisyiyah Pekajangan
                        </p>

                        {{-- Deskripsi --}}
                        <p class="text-sm md:text-lg dark:text-gray-200 text-gray-600 leading-relaxed max-w-xl">
                            Berawal dari semangat pengabdian PCA Pekajangan, kami tumbuh menjadi rumah sakit ibu dan anak yang melayani dengan hati, profesional, dan penuh kepedulian.
                        </p>

                        {{-- Buttons --}}
                        <div class="flex flex-wrap gap-4 pt-4 justify-center lg:justify-start">
                            <a href="#layanan" class="px-6 py-3 bg-green-600 hover:bg-green-700 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105 shadow-lg text-sm md:text-base">
                                Lihat Layanan
                            </a>
                            <a href="#tentang" class="px-6 py-3 border border-green-600 dark:border-white/30 rounded-xl dark:text-white text-green-600 font-semibold hover:bg-white hover:text-black transition-all duration-300 text-sm md:text-base">
                                Tentang Kami
                            </a>
                        </div>
                    </div>

                    {{-- Slot Kosong untuk Grid Kanan (Hanya muncul di Desktop jika diperlukan) --}}
                    <div class="hidden lg:block"></div>
                </div>
            </div>
        </div>
        @foreach ($carousels as $index => $item)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ $item['image'] }}"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "
                    alt="Slide {{ $index + 2 }}">
                {{-- <div class="absolute inset-0 bg-black/40"></div> --}}

                {{-- @if (isset($item['title']))
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <div class="text-white p-4">
                            <h2 class="text-2xl md:text-4xl font-bold">{{ $item['title'] }}</h2>
                            <p class="mt-2 text-sm md:text-lg">{{ $item['description'] ?? '' }}</p>
                        </div>
                    </div>
                @endif --}}
            </div>
        @endforeach
    </div>

    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" data-carousel-slide-to="0"></button>

        @foreach ($carousels as $index => $item)
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" data-carousel-slide-to="{{ $index + 1 }}"></button>
        @endforeach
    </div>

    <button type="button" class="absolute top-0 start-0 z-40 flex items-center justify-center h-full px-4 group" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-40 flex items-center justify-center h-full px-4 group" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </span>
    </button>
</div>

<script>
    function initCarousel() {
        if (typeof initFlowbite !== 'undefined') {
            initFlowbite();
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        initCarousel();
    });

    document.addEventListener('livewire:navigated', () => {
        initCarousel();
    });
</script>
