<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

    @forelse ($articles as $item)
        <div class="flex bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-gray-800 dark:border-gray-700">

            <div class="w-1/3 flex-shrink-0">
                <img class="w-full h-full object-cover aspect-square"
                    src="{{ $item['cover'] }}"
                    alt="{{ $item['title'] }}">
            </div>

            <div class="w-2/3 p-4 flex flex-col justify-between">
                <h3 class="text-sm md:text-base font-bold text-green-700 dark:text-green-400 line-clamp-2 leading-tight">
                    <a href="#">{{ $item['title'] }}</a>
                </h3>

                <p class="text-[11px] text-gray-500 mt-2 line-clamp-2">
                    {{ \Illuminate\Support\Str::limit(strip_tags($item['body']), 80) }}
                </p>

                <div class="flex justify-between items-center mt-3 text-[10px] text-gray-400">
                    <span class="flex items-center gap-1">
                        <i class="ri-calendar-line"></i>
                        {{ \Carbon\Carbon::parse($item['created_at'])->format('d M Y') }}
                    </span>

                    <span>Dibaca {{ $item['views'] ?? 0 }}x</span>
                </div>
            </div>

        </div>
    @empty
        <div class="col-span-3 text-center text-gray-500">
            Tidak ada artikel terkait.
        </div>
    @endforelse

</div>
