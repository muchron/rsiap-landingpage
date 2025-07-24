<div class="dark:bg-gray-800 bg-green-200 p-7 rounded-xl">
    <ul role="list" class="divide-blue-200dark:divide-gray-700">
        @foreach ($articles['data']['articles'] as $article)
            <li class="py-2 sm:py-2">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-lg object-cover" src="{{ $article['cover'] }}" alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            {{ $articles['data']['name'] }}
                        </p>
                        <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                            {{ $article['title'] }}
                        </a>
                        <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                            <i class="ri-calendar-line"></i> {{ Carbon\Carbon::parse($article['created_at'])->format('d F Y') }}, <i class="ri-user-line"></i> {{ $article['author'] }}
                        </p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
