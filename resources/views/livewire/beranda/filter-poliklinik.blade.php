<div>
    <div class="relative mx-auto mt-6 px-4 lg:w-2/3 xl:w-1/2">
        <div class="absolute -bottom-6 -left-6 w-20 h-20 bg-green-500/10 rounded-full blur-2xl"></div>

        <div class="relative bg-white dark:bg-gray-800 p-5 rounded-2xl border border-green-100 dark:border-gray-700 shadow-xl shadow-green-900/5">

            {{-- Header Ringkas --}}
            <div class="flex items-center gap-3 mb-5">
                <div class="flex-shrink-0 w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center">
                    <i class="ri-search-eye-line text-green-600 dark:text-green-400 text-xl"></i>
                </div>
                <div>
                    <h1 class="text-lg font-bold text-gray-900 dark:text-white leading-tight">
                        Cari Jadwal <span class="text-green-600">Poliklinik</span>
                    </h1>
                    <p class="text-[11px] text-gray-500 dark:text-gray-400">Temukan jadwal praktik dokter spesialis kami</p>
                </div>
            </div>

            {{-- Form Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div wire:ignore
                    wire:key="datepicker-{{ $selectedDate }}"
                    x-data
                    x-init="initDatepicker($el, @js($selectedDate))">

                    <label class="block mb-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400">
                        <i class="ri-calendar-check-line mr-1"></i> Tanggal Kunjungan
                    </label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none text-green-500">
                            <i class="ri-calendar-2-line"></i>
                        </div>
                        <input id="default-datepicker" type="text" readonly
                            value="{{ $selectedDate }}"
                            class="bg-gray-50 dark:bg-gray-900/50 border border-gray-100 dark:border-gray-700 text-gray-900 dark:text-white text-sm rounded-xl focus:ring-2 focus:ring-green-500/20 focus:border-green-500 block w-full ps-9 p-2.5 transition-all cursor-pointer">
                    </div>
                </div>

                {{-- Input Dokter --}}
                <div class="w-full">
                    <label class="block mb-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400">
                        <i class="ri-user-heart-line mr-1"></i> Dokter Spesialis
                    </label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none text-green-500">
                            <i class="ri-stethoscope-line"></i>
                        </div>
                        <select wire:model.live="selectedDoctor" wire:change="changeDoctor"
                            class="bg-gray-50 dark:bg-gray-900/50 border border-gray-100 dark:border-gray-700 text-gray-900 dark:text-white text-sm rounded-xl focus:ring-2 focus:ring-green-500/20 focus:border-green-500 block w-full ps-9 p-2.5 appearance-none cursor-pointer">
                            <option value="">Semua Dokter Spesialis</option>
                            @foreach ($doctors as $item)
                                <option value="{{ $item['slug'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- Status Filter --}}
            <div class="mt-4 pt-4 border-t border-gray-50 dark:border-gray-700/50">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    @if ($selectedDoctor || ($selectedDate && $selectedDate !== now()->format('d/m/Y')))
                        <div class="border-gray-50 dark:border-gray-700/50 flex flex-wrap items-center justify-between gap-3 animate-fade-in">
                            <div class="flex items-center gap-2 text-[11px] font-medium text-gray-500">
                                <span>Filter Aktif:</span>
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded font-bold border border-green-100 dark:border-green-800">
                                    <i class="ri-calendar-event-fill text-[10px]"></i> {{ $currentDay }}
                                </span>
                                @if ($selectedDoctor)
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded font-bold border border-blue-100 dark:border-blue-800">
                                        <i class="ri-user-heart-fill text-[10px]"></i> {{ Str::limit(collect($doctors)->firstWhere('slug', $selectedDoctor)['name'] ?? '', 12) }}
                                    </span>
                                @endif
                            </div>

                            <button wire:click="resetFilter"
                                class="text-[11px] font-bold text-red-500 hover:text-red-700 bg-red-50 hover:bg-red-100 dark:bg-red-900/20 dark:hover:bg-red-900/40 px-3 py-1 rounded-lg transition-all flex items-center gap-1">
                                <i class="ri-close-line"></i> Reset Filter
                            </button>
                        </div>
                    @endif
                    <div class="flex items-center gap-1 text-[10px] text-gray-400 italic">
                        <i class="ri-information-line text-green-500"></i>
                        <span>Jadwal bisa berubah.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- AREA JADWAL --}}
    <div class="container mx-auto py-8 px-4 md:px-12 max-w-screen-2xl relative">

        {{-- Skeleton Loader: Tampil hanya saat request dikirim --}}
        <div wire:loading.grid class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @for ($i = 0; $i < 4; $i++)
                {{-- Dikurangi jadi 4 agar tidak terlalu panjang saat loading --}}
                <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-3 animate-pulse">
                    <div class="flex items-center gap-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-green-50 dark:bg-gray-700 rounded-xl"></div>
                        <div class="flex-1 space-y-2">
                            <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
                            <div class="h-2 bg-green-100 dark:bg-green-900/30 rounded w-1/2"></div>
                        </div>
                    </div>
                    <div class="mt-4 h-8 bg-gray-50 dark:bg-gray-700 rounded-lg w-full"></div>
                </div>
            @endfor
        </div>

        {{-- Daftar Asli: Gunakan block condisional agar jika kosong, element benar-benar hilang --}}
        <div wire:loading.remove>
            @if (count($schedulesList) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach ($schedulesList as $item)
                        <div wire:key="schedule-{{ $loop->index }}-{{ $item['slug'] ?? $loop->index }}"
                            class="group bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-3 shadow-sm hover:shadow-md transition-all duration-200">
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ $item['photo'] ?? 'https://ui-avatars.com/api/?name=' . urlencode($item['name']) . '&background=f0fdf4&color=16a34a' }}"
                                        alt="{{ $item['name'] }}"
                                        class="w-16 h-16 rounded-xl object-cover">
                                </div>

                                <div class="min-w-0 flex-1">
                                    <h3 class="text-sm font-bold text-gray-900 dark:text-white truncate group-hover:text-green-600 transition-colors">
                                        {{ $item['name'] }}
                                    </h3>
                                    <p class="text-[10px] font-bold text-green-600 dark:text-green-400 uppercase tracking-tight truncate">
                                        {{ $item['polyclinic'] }}
                                    </p>

                                    <div class="mt-2 flex items-center gap-1.5 text-xs text-gray-500 dark:text-gray-400 font-medium">
                                        <i class="ri-time-fill text-green-500 text-sm"></i>
                                        <span>
                                            {{ isset($item['start_at']) ? \Carbon\Carbon::parse($item['start_at'])->format('H:i') : '-' }}
                                            -
                                            {{ isset($item['end_at']) ? \Carbon\Carbon::parse($item['end_at'])->format('H:i') : '-' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                @php
                                    $pesanWa = 'Halo RSIA Aisyiyah, saya ingin mendaftar pemeriksaan:' . "\nDokter: " . $item['name'] . "\nPoliklinik: " . $item['polyclinic'] . "\nTanggal: " . ($selectedDate ?? date('d/m/Y')) . "\nJam: " . \Carbon\Carbon::parse($item['start_at'])->format('H:i') . ' - ' . \Carbon\Carbon::parse($item['end_at'])->format('H:i');
                                @endphp
                                <a href="https://wa.me/628123456789?text={{ urlencode($pesanWa) }}"
                                    target="_blank"
                                    class="flex items-center justify-center w-full py-2 text-xs font-bold text-green-700 dark:text-green-400 bg-green-50 dark:bg-green-900/20 hover:bg-green-600 hover:text-white dark:hover:bg-green-600 dark:hover:text-white rounded-lg transition-all border border-green-100 dark:border-green-900">
                                    <i class="ri-whatsapp-line mr-1.5"></i> Daftar Online
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                {{-- Bagian ini akan "naik" ke atas jika tidak ada jadwal --}}
                <div class="flex flex-col items-center justify-center py-4 text-center">
                    <div class="w-16 h-16 bg-gray-50 dark:bg-gray-800/50 rounded-full flex items-center justify-center mb-3">
                        <i class="ri-calendar-close-line text-2xl text-gray-300"></i>
                    </div>
                    <p class="text-sm text-gray-400 italic">Tidak ada jadwal tersedia untuk kriteria ini.</p>
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function initDatepicker(el, initialValue) {
            const inputEl = el.querySelector('#default-datepicker');
            const today = new Date();
            const dayOfWeek = today.getDay();
            const distanceToSaturday = 6 - dayOfWeek;
            const endOfWeek = new Date();
            endOfWeek.setDate(today.getDate() + distanceToSaturday);

            const datepicker = new Datepicker(inputEl, {
                autohide: true,
                format: 'dd/mm/yyyy',
                orientation: 'bottom',
                container: 'body',
                minDate: today,
                maxDate: endOfWeek,
                daysOfWeekDisabled: [0],
            });

            if (initialValue) {
                datepicker.setDate(initialValue);
            }

            inputEl.addEventListener('changeDate', (e) => {
                @this.set('selectedDate', e.target.value);
            });
        }
    </script>
@endpush
