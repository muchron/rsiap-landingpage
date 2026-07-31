<?php

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Services\ApiService;

new class extends Component {

    public string $currentCategory = '';
    public string $currentArticle = '';

    public array $categories = [];
    public array $latest = [];
    public array $articles = [];

    public function mount(ApiService $api, $currentCategory = '', $currentArticle = '')
    {
        $this->currentCategory = $currentCategory;
        $this->currentArticle = $currentArticle;

        $this->categories = $api
            ->get('categories')
            ->json('data', []);

        $this->latest = $api
            ->get('articles/latest', [
                'limit' => 5,
            ])
            ->json('data', []);
    }
    public string $expandedCategory = '';

    public function toggleCategory(string $slug, ApiService $api)
    {
        if ($this->expandedCategory === $slug) {
            $this->expandedCategory = '';
            return;
        }

        $this->expandedCategory = $slug;

        $this->articles[$slug] = $api
            ->get("categories/{$slug}/articles", [
                'limit' => 5,
            ])
            ->json('data', []);
    }

};

?>

<div class="space-y-6">

    {{-- Kategori --}}
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6">

        <h3 class="font-bold text-lg mb-4 dark:text-white">
            Kategori
        </h3>

        <div x-data="{ open: '{{ $currentCategory }}' }" class="space-y-2">
            @foreach($categories as $category)
                <div class="border-b border-gray-200 dark:border-gray-700 py-2">
                    <button
                        @click="open = open === '{{ $category['slug'] }}'
                                                                                                                                                                                                                        ? ''
                                                                                                                                                                                                                        : '{{ $category['slug'] }}'"
                        class="w-full flex justify-between items-center py-2">

                        <span class="flex items-center gap-2 font-medium text-gray-800 dark:text-white">
                            {{ $category['name'] }}

                            <span
                                class="inline-flex items-center justify-center min-w-6 h-6 px-2 rounded-full
                                                                                                                                               bg-blue-100 text-blue-600 dark:bg-blue-900/40 dark:text-blue-300
                                                                                                                                               text-xs font-semibold">
                                {{ $category['count'] }}
                            </span>
                        </span>

                        <i class="ri-arrow-down-s-line text-xl transition-transform duration-300"
                            :class="open === '{{ $category['slug'] }}' ? 'rotate-180' : ''">
                        </i>

                    </button>

                    <div x-show="open === '{{ $category['slug'] }}'" x-collapse.duration.300ms x-cloak
                        class="overflow-hidden">

                        @foreach($category['articles'] as $article)

                                    <a wire:navigate href="{{ route('artikel.read', $article['slug']) }}"
                                        class="flex gap-3 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition">

                                        <img src="{{ $article['cover'] }}" class="w-14 h-14 rounded-lg object-cover">

                                        <div class="flex-1">

                                            <h5 class="text-sm font-medium line-clamp-2
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                {{ $currentArticle == $article['slug']
                            ? 'text-blue-600 dark:text-blue-400'
                            : 'text-gray-800 dark:text-white' }}">

                                                {{ $article['title'] }}

                                            </h5>

                                            <p class="text-xs text-gray-500">
                                                {{ \Carbon\Carbon::parse($article['created_at'])->translatedFormat('d M Y') }}
                                            </p>

                                        </div>

                                    </a>

                        @endforeach

                    </div>

                </div>

            @endforeach
        </div>

    </div>
    {{-- CTA Rawat Jalan --}}
    <div class="relative overflow-hidden rounded-2xl shadow-lg group">

        <img src="{{ asset('images/goest-to-poliklinik.webp') }}" alt="Rawat Jalan"
            class="w-full h-72 object-cover transition duration-500 group-hover:scale-105">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
        </div>

        <!-- Content -->
        <div class="absolute inset-x-0 bottom-0 p-6">

            <p class="mt-2 text-sm text-gray-200 leading-6">
                Temukan dokter spesialis sesuai kebutuhan Anda dan jadwalkan kunjungan dengan mudah.
            </p>

            <a wire:navigate href="{{ route('layanan.rawat-jalan', ['scroll' => 'poliklinik']) }}"
                class="mt-5 inline-flex items-center gap-2 rounded-xl
                   bg-white/20 backdrop-blur-md px-3 py-1 text-md font-medium text-white hover:bg-white/30 transition-all duration-300 group-hover:bg-white group-hover:text-black">
                Poliklinik Dokter Spesialis
                <i class="ri-arrow-right-line"></i>

            </a>

        </div>

    </div>


</div>