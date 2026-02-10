<section class="py-16 px-6 lg:px-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10">

        <div class="lg:col-span-4">
            <h2 class="text-4xl font-bold text-[#006d44] mb-4">Berita & Artikel</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laborum vitae cum quisquam totam, vel ipsa fugiat deserunt aliquid, illum explicabo reprehenderit deleniti. Quis tempora aperiam, sequi a molestiae amet.
            </p>
            <a href="#" class="inline-flex items-center font-semibold text-[#006d44] hover:underline">
                Lihat Semua Artikel
                <span class="ms-2">→</span>
            </a>
        </div>

        <div class="lg:col-span-8">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @if ($articles === null || count($articles) == 0)
                    <p class="col-span-full font-medium text-sm text-gray-600">Artikel belum tersedia</p>
                @else
                    @foreach ($articles as $article)
                        <div class="bg-white rounded-xl shadow-lg flex flex-col h-full overflow-hidden transition-transform duration-300 hover:scale-105">

                            <div class="h-48 overflow-hidden">
                                <img class="w-full h-full object-cover" src="{{ $article['cover'] }}" alt="{{ $article['title'] }}" />
                            </div>

                            <div class="p-6 flex flex-col flex-grow">
                                <a href="{{ route('artikel.read', ['slug' => $article['slug']]) }}">
                                    <h5 class="mb-3 text-xl font-bold text-gray-900 line-clamp-2 hover:text-[#006d44]">
                                        {{ $article['title'] }}
                                    </h5>
                                </a>

                                <div class="text-gray-600 text-sm mb-6 line-clamp-3">
                                    {!! Str::limit(strip_tags($article['body']), 100) !!}
                                </div>

                                <div class="mt-auto">
                                    <a href="{{ route('artikel.read', ['slug' => $article['slug']]) }}" class="inline-flex items-center justify-between w-full sm:w-auto px-5 py-2.5 text-sm font-bold text-white bg-[#006d44] rounded-lg hover:bg-[#005a38] transition-colors">
                                        Baca Selengkapnya
                                        <svg class="w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
</section>
