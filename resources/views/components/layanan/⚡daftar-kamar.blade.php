<?php

use Livewire\Component;
use App\Services\ApiService;

new class extends Component {
    public $selectedClass = '';
    public $readyToLoad = false;
    public $kamars = [];
    public $page = 1;
    public $lastPage = 1;
    public $isLoading = false;

    public function loadData()
    {
        $this->readyToLoad = true;
        $this->resetData();
        $this->fetchRooms();
    }

    public function setFilter($class)
    {
        $this->selectedClass = $class;
        $this->resetData();
        $this->fetchRooms();
    }

    public function resetFilter()
    {
        $this->selectedClass = '';
        $this->resetData();
        $this->fetchRooms();
    }

    protected function resetData()
    {
        $this->kamars = [];
        $this->page = 1;
        $this->lastPage = 1;
    }

    public function loadMore()
    {
        if ($this->page >= $this->lastPage || $this->isLoading) {
            return;
        }

        $this->page++;
        $this->fetchRooms();
    }

    protected function fetchRooms()
    {
        $this->isLoading = true;

        // Simulasi delay sedikit agar transisi skeleton terlihat halus
        usleep(300000);

        $response = app(ApiService::class)->get('rooms', [
            'class' => $this->selectedClass,
            'page' => $this->page,
        ]);

        if ($response->successful()) {
            $json = $response->json();
            $newItems = $json['data'] ?? [];

            $this->kamars = $this->page === 1
                ? $newItems
                : array_merge($this->kamars, $newItems);

            $this->lastPage = $json['meta']['last_page'] ?? 1;
        }

        $this->isLoading = false;
    }
};
?>
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
            @keyframes soft-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        .animate-soft { animation: soft-bounce 3s infinite ease-in-out; }

        /* Efek glassmorphism untuk modal */
        .glass-modal {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .dark .glass-modal {
            background: rgba(31, 41, 55, 0.8);
        }
        </style>
@endpush
<div wire:init="loadData" class="relative">

    <div class="relative mx-auto mt-6 px-4 lg:w-2/3 xl:w-1/2 mb-10">
        <div class="absolute -bottom-6 -left-6 w-20 h-20 bg-blue-500/10 rounded-full blur-2xl"></div>

        <div
            class="relative bg-white dark:bg-gray-800 p-5 rounded-2xl border border-blue-100 dark:border-gray-700 shadow-xl shadow-blue-900/5">
            <div class="flex items-center gap-3 mb-5">
                <div
                    class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center">
                    <i class="ri-hotel-bed-line text-blue-600 dark:text-blue-400 text-xl"></i>
                </div>
                <div>
                    <h1 class="text-lg font-bold text-gray-900 dark:text-white leading-tight">
                        Cari Ketersediaan <span class="text-blue-600">Kamar</span>
                    </h1>
                    <p class="text-[11px] text-gray-500 dark:text-gray-400">Pilih kelas kamar sesuai kebutuhan Anda</p>
                </div>
            </div>

            <div class="flex flex-wrap gap-2">
                @php
$options = ['' => 'Semua', 'vvip' => 'VVIP', 'vip' => 'VIP', '1' => 'Kelas 1', '2' => 'Kelas 2', '3' => 'Kelas 3'];
                @endphp

                @foreach ($options as $key => $label)
                            <button wire:click="setFilter('{{ $key }}')" class="px-4 py-2 rounded-xl text-[11px] font-bold uppercase tracking-wider transition-all duration-300 border
                                    {{ (string) $selectedClass === (string) $key
        ? 'bg-blue-600 border-blue-600 text-white shadow-md scale-105'
        : 'bg-gray-50 dark:bg-gray-900/50 border-gray-100 dark:border-gray-700 text-gray-500 hover:bg-gray-100 hover:scale-105'
                                    }}">
                                {{ $label }}
                            </button>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mx-auto py-4 px-4 md:px-12 max-w-screen-2xl" x-data="{ 
    showModal: false, 
    activeKamar: null,
    openModal(data) {
        this.activeKamar = data;
        this.showModal = true;
    }
}">
        <div wire:loading.class="opacity-40" wire:target="setFilter, loadData"
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 transition-all duration-500">

            @foreach ($kamars as $index => $kamar)
                <div wire:key="room-{{ $kamar['id'] }}"
                    class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-xl transition-all duration-300">

                <div class="relative h-44 overflow-hidden rounded-t-2xl">
                    <img src="{{ $kamar['image'] }}" alt="{{ $kamar['name'] }}"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                    <div class="absolute top-0 right-4 z-10">
                        <div
                            class="relative bg-red-500 text-white py-1.5 px-3 rounded-b-lg shadow-md flex flex-col items-center min-w-[50px]">
                            <span class="text-[8px] font-bold uppercase tracking-widest opacity-80 leading-tight">Kelas</span>
                            <span class="text-xl font-black leading-tight">{{ strtoupper($kamar['class']) }}</span>

                            <div class="absolute -left-1 top-0 w-1 h-1 bg-red-800 rounded-tl-sm"></div>
                            <div class="absolute left-0 top-0 w-1 h-1 bg-red-500"></div>
                        </div>
                    </div>
                </div>
                    <div class="p-5 flex flex-col h-[180px]">
                        <h3 class="font-bold text-gray-900 dark:text-white group-hover:text-blue-600 transition-colors">
                            {{ $kamar['name'] }}
                        </h3>
                    <div class="mt-3 flex flex-wrap gap-1.5 overflow-hidden">
                        @foreach (collect($kamar['features'])->take(3) as $feature) {{-- Membatasi agar tidak merusak layout --}}
                            <span
                                class="text-[9px] font-medium text-gray-500 dark:text-gray-400 bg-gray-50 dark:bg-gray-700/50 px-2 py-0.5 rounded border border-gray-100 dark:border-gray-600 flex items-center gap-1">
                                <i class="ri-checkbox-circle-fill text-blue-500 text-[10px]"></i>
                                {{ $feature }}
                            </span>
                        @endforeach

                        @if(count($kamar['features']) > 3)
                            <span class="text-[9px] font-bold text-gray-400 mt-1">
                                +{{ count($kamar['features']) - 3 }} Lainnya
                            </span>
                        @endif
                    </div>

                        <div
                            class="mt-auto pt-4 border-t border-gray-50 dark:border-gray-700/50 flex items-center justify-between">
                            <span class="text-blue-600 dark:text-blue-400 font-black text-sm">
                                Rp {{ number_format($kamar['price'], 0, ',', '.') }}
                            </span>
                            <button
                                class="text-[11px] font-bold text-blue-700 bg-blue-50 dark:bg-blue-900/20 px-3 py-1.5 rounded-lg border border-blue-100 dark:border-blue-800"
                                @click="openModal({{ json_encode($kamar) }})">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($isLoading)
                @foreach(range(1, 4) as $i)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-3 overflow-hidden">
                        <div class="h-40 skeleton rounded-xl mb-4"></div>
                        <div class="space-y-3 px-2">
                            <div class="h-5 skeleton rounded w-3/4"></div>
                            <div class="h-3 skeleton rounded w-1/4"></div>
                            <div class="pt-6 flex justify-between items-center">
                                <div class="h-6 skeleton rounded w-1/3"></div>
                                <div class="h-8 skeleton rounded w-16"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        @if ($page < $lastPage)
            <div x-intersect.margin.500px="$wire.loadMore()" class="flex justify-center py-10">
                <div class="flex items-center gap-2 text-gray-400 text-xs italic">
                    <div class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-ping"></div>
                    Memuat lebih banyak...
                </div>
            </div>
        @endif

        <template x-teleport="body">
            <div x-show="showModal"
                class="fixed inset-0 z-[999] flex items-center justify-center p-4 bg-gray-900/40 backdrop-blur-md"
                x-transition:enter="transition opacity-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition opacity-in duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
        
                <div @click.away="showModal = false" x-show="showModal" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 scale-90 translate-y-12 blur-sm"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0 blur-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-95 translate-y-8"
                    class="glass-modal w-full max-w-lg rounded-[2.5rem] overflow-hidden shadow-2xl border border-white/20 dark:border-gray-700/50">
        
                    <template x-if="activeKamar">
                        <div>
                            <div class="relative h-72 overflow-hidden">
                                <img :src="activeKamar.image" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                                </div>
        
                                <button @click="showModal = false"
                                    class="absolute top-6 right-6 bg-white/20 hover:bg-white/40 backdrop-blur-xl text-white w-10 h-10 rounded-2xl flex items-center justify-center transition-all duration-300 hover:rotate-90 hover:text-red-500">
                                    <i class="ri-close-fill text-xl"></i>
                                </button>
        
                                <div class="absolute bottom-8 left-8 right-8">
                                    <span
                                        class="px-3 py-1 bg-blue-600 text-white text-[10px] font-black uppercase rounded-lg shadow-lg"
                                        x-text="'Kelas ' + activeKamar.class"></span>
                                    <h2 class="text-white text-3xl font-black mt-2 tracking-tight" x-text="activeKamar.name">
                                    </h2>
                                </div>
                            </div>
        
                            <div class="p-8 bg-white dark:bg-gray-800">
                                <div
                                    class="flex items-center justify-between mb-8 bg-blue-50 dark:bg-blue-900/10 p-4 rounded-3xl border border-blue-100/50 dark:border-blue-900/30">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-blue-200 dark:shadow-none">
                                            <i class="ri-money-dollar-circle-line text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Biaya
                                                Harian</p>
                                            <p class="text-xl font-black text-blue-600 dark:text-blue-400"
                                                x-text="'Rp ' + new Intl.NumberFormat('id-ID').format(activeKamar.price)"></p>
                                        </div>
                                    </div>
                                </div>
        <div class="mb-8">
            <h4 class="text-gray-800 dark:text-white font-bold mb-2 flex items-center gap-2">
                <i class="ri-information-line text-blue-500"></i> Tentang Kamar
            </h4>
            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed italic"
                x-text="activeKamar.desc || 'Kamar rawat inap dengan standar kenyamanan tinggi untuk mempercepat proses pemulihan pasien.'">
            </p>
        </div>
                                <h4 class="text-gray-800 dark:text-white font-bold mb-4 flex items-center gap-2">
                                    <i class="ri-list-check-3 text-blue-500"></i> Fasilitas Utama
                                </h4>
        
                                <div class="grid grid-cols-2 gap-4 mb-8">
                                    <template x-for="(feat, index) in activeKamar.features">
                                        <div class="flex items-center gap-3 text-gray-600 dark:text-gray-400 group/item">
                                            <div
                                                class="w-6 h-6 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center group-hover/item:bg-blue-500 group-hover/item:text-white transition-colors duration-300">
                                                <i class="ri-check-line text-xs"></i>
                                            </div>
                                            <span class="text-sm font-medium" x-text="feat"></span>
                                        </div>
                                    </template>
                                </div>
        
                                <div class="flex gap-4">
                                    <button @click="showModal = false"
                                        class="flex-1 py-4 text-gray-400 font-bold transition-colors hover:text-red-500">Tutup</button>
                                    <a :href="'https://wa.me/628123456789?text=Assalamualaikum RSIA, saya ingin booking kamar ' + activeKamar.name+', apakah masih tersedia ?'"+
                                        target="_blank"
                                        class="flex-[2] bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-2xl font-bold text-center shadow-xl shadow-blue-200 dark:shadow-none transition-all hover:scale-105 active:scale-95 flex items-center justify-center gap-2">
                                        <i class="ri-whatsapp-line text-lg"></i> Booking Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </template>
    </div>
</div>