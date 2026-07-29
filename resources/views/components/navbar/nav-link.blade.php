@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}" {{ $attributes }}
    class="{{ $active ? 'bg-blue-50 text-blue-700 font-bold dark:bg-blue-900/20 dark:text-blue-400 border-l-4 border-blue-600' : 'text-gray-700 dark:text-gray-200 border-l-4 border-transparent' }} flex items-center py-3 px-5 transition-all duration-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 hover:text-blue-600 dark:hover:text-white"
    wire:navigate>
    <span class="text-sm tracking-wide">{{ $slot }}</span>
</a>
