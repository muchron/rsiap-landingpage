<div x-data="{ open: false, timeout: null }"
    class="relative w-full md:w-auto"
    @mouseleave="timeout = setTimeout(() => { open = false }, 300)"
    @mouseenter="clearTimeout(timeout); open = true">

    <button
        {{-- Di mobile, kita pakai click. Di desktop, hover sudah ditangani mouseenter --}}
        @click="open = !open"
        @click.outside="open = false"
        class="flex items-center justify-between w-full md:w-auto gap-2 py-2 px-2 text-gray-700 dark:text-gray-200 hover:text-green-600 transition outline-none">
        <span class="flex items-center gap-2">{{ $trigger }}</span>
        <i class="ri-arrow-down-s-line transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
    </button>

    <div x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"
        {{-- Kunci: batalkan timeout saat masuk ke area menu --}}
        @mouseenter="clearTimeout(timeout)"
        @mouseleave="timeout = setTimeout(() => { open = false }, 300)"
        class="absolute left-0 w-56 z-[100] pt-2 md:pt-4" {{-- Tambah padding top buat bridge --}}
        style="display: none;">

        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl py-2 border border-gray-100 dark:border-gray-700 overflow-hidden">
            <div class="flex flex-col">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
