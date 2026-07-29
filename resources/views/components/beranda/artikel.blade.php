<section class="py-16 px-6 lg:px-20 
                bg-gradient-to-r 
                from-blue-50 via-blue-100 to-blue-200
                dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">

    <div class="lg:max-w-screen-2xl xl:max-w-screen-3xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-3">

            <h2 class="text-4xl font-bold 
                       text-blue-700 
                       dark:text-blue-400 mb-4">
                Berita & Artikel
            </h2>

            <p class="text-gray-700 dark:text-gray-300 
                      leading-relaxed mb-6">
                Update kesehatan terkini, berita seputar layanan medis,
                dan informasi promo eksklusif. Temukan semua artikel
                bermanfaat dari RSIA Aisyiyah Pekajangan di sini.
            </p>

            <a href="#"
                class="inline-flex items-center font-semibold 
                      text-blue-700 dark:text-blue-400 
                      hover:underline">
                Lihat Semua Artikel
                <span class="ms-2">→</span>
            </a>

            {{-- CATEGORY TAG --}}
            <div class="flex flex-wrap gap-2 py-4">
                @foreach ($categories as $category)
                    <a href="{{ route('artikel', ['category' => $category['slug']]) }}" wire:navigate
                        class="px-4 py-1 text-sm font-medium 
                              text-blue-700 
                              bg-white/70 backdrop-blur
                              border border-blue-200 
                              rounded-lg
                              hover:bg-blue-600 hover:text-white
                              transition-colors duration-200
                              dark:bg-gray-800 
                              dark:text-blue-300 
                              dark:border-gray-700 
                              dark:hover:bg-blue-500 
                              dark:hover:text-white">
                        {{ $category['name'] }}
                    </a>
                @endforeach
            </div>

        </div>

        {{-- RIGHT CONTENT --}}
        <div class="lg:col-span-9">

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                @if ($articles === null || count($articles) == 0)

                    <p class="col-span-full font-medium text-sm 
                              text-gray-600 dark:text-gray-400">
                        Artikel belum tersedia
                    </p>
                @else
                    @foreach ($articles as $article)
                        <div class="bg-white dark:bg-gray-800 
                                    rounded-2xl shadow-md 
                                    dark:shadow-black/40
                                    flex flex-col h-full overflow-hidden 
                                    transition-all duration-300 
                                    hover:-translate-y-1 hover:shadow-xl">

                            {{-- IMAGE --}}
                            <div class="h-48 overflow-hidden">
                                <img class="w-full h-full object-cover 
                                            transition-transform duration-500 
                                            hover:scale-105 dark:brightness-[0.6] dark:contrast-[1.1]"
                                    src="{{ $article['cover'] }}"
                                    alt="{{ $article['title'] }}" />
                            </div>

                            {{-- CONTENT --}}
                            <div class="p-6 flex flex-col flex-grow">

                                <a href="{{ route('artikel.read', ['slug' => $article['slug']]) }}">
                                    <h5 class="mb-3 text-xl font-bold 
                                               text-gray-900 
                                               hover:text-blue-600
                                               dark:text-white 
                                               dark:hover:text-blue-400
                                               line-clamp-2 transition-colors">
                                        {{ $article['title'] }}
                                    </h5>
                                </a>

                                <div class="text-gray-600 dark:text-gray-400 
                                            text-sm mb-6 line-clamp-3">
                                    {!! Str::limit(strip_tags($article['body']), 100) !!}
                                </div>

                                <div class="mt-auto">
                                    <a href="{{ route('artikel.read', ['slug' => $article['slug']]) }}"
                                        class="inline-flex items-center justify-between 
                                              w-full sm:w-auto px-5 py-2.5 
                                              text-sm font-semibold text-white 
                                              bg-blue-600 rounded-lg 
                                              hover:bg-blue-700
                                              dark:bg-blue-500 
                                              dark:hover:bg-blue-400
                                              transition-colors">
                                        Baca Selengkapnya
                                        <svg class="w-3.5 h-3.5 ms-2" fill="none"
                                            viewBox="0 0 14 10"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
