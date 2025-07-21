   <div>
       <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 gap-8 justify-center py-6">
           @foreach ($artikels['data'] as $artikel)
               <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                   <div class="card-image">
                       <a href="#">
                           <img src="{{ $artikel['cover'] }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                       </a>
                   </div>
                   <div class="card-content p-6">
                       <div class="card-title">
                           <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                               <a href="{{ route('artikel.read', $artikel['slug']) }}">{{ $artikel['title'] }}</a>
                           </p>
                           <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> {{ Carbon\Carbon::parse($artikel['created_at'])->format('d F Y') }}<i class="ri-user-line"></i> {{ $artikel['author'] }}</p>
                       </div>
                       <div class="card-body mt-3">
                           <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                               {{ Str::limit(strip_tags($artikel['body']), 150) }}
                           </p>
                           <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                       </div>
                   </div>

               </div>
           @endforeach
       </div>
       <div class="container mx-auto flex justify-center w-full p-6 items-center">
           @if (isset($artikels['meta']['links']) && count($artikels['meta']['links']) > 3) {{-- Ensure there are actual page links beyond prev/next --}}
               <nav aria-label="Pagination" class="mt-4">
                   <ul class="inline-flex -space-x-px text-sm">
                       @foreach ($artikels['meta']['links'] as $link)
                           @php
                               $baseClass = 'flex items-center justify-center px-3 h-8 leading-tight border';
                               $defaultClass = 'text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white';
                               $activeClass = 'z-10 text-blue-600 border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white';
                               $disabledClass = 'text-gray-300 bg-white border-gray-300 cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-600';

                               $currentLinkClass = $baseClass . ' ' . $defaultClass;

                               if ($link['label'] === '&laquo; Previous') {
                                   $currentLinkClass .= ' rounded-s-lg';
                               } elseif ($link['label'] === 'Next &raquo;') {
                                   $currentLinkClass .= ' rounded-e-lg';
                               }

                               if ($link['active']) {
                                   $currentLinkClass = $baseClass . ' ' . $activeClass;
                               } elseif (is_null($link['url'])) {
                                   if (str_contains($link['label'], 'Previous')) {
                                       $currentLinkClass = $baseClass . ' ' . $disabledClass . ' rounded-s-lg';
                                   } elseif (str_contains($link['label'], 'Next')) {
                                       $currentLinkClass = $baseClass . ' ' . $disabledClass . ' rounded-e-lg';
                                   } else {
                                       $currentLinkClass = $baseClass . ' ' . $disabledClass;
                                   }
                               }
                           @endphp
                           <li>
                               @if (is_null($link['url']))
                                   <span class="{{ $currentLinkClass }}">{!! $link['label'] !!}</span>
                               @else
                                   @php
                                       $pageNumber = 1;
                                       if (preg_match('/page=(\d+)/', $link['url'], $matches)) {
                                           $pageNumber = (int) $matches[1];
                                       } elseif ($link['label'] === '&laquo; Previous') {
                                           $pageNumber = $artikels['meta']['current_page'] - 1;
                                       } elseif ($link['label'] === 'Next &raquo;') {
                                           $pageNumber = $artikels['meta']['current_page'] + 1;
                                       }
                                   @endphp
                                   <a href="#" wire:click.prevent="gotoPage({{ $pageNumber }})" class="{{ $currentLinkClass }}">{!! $link['label'] !!}</a>
                               @endif
                           </li>
                       @endforeach
                   </ul>
               </nav>
           @endif
       </div>
   </div>
