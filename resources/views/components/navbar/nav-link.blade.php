@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}" {{ $attributes }}
    class="{{ $active ? 'bg-green-50 text-green-700 font-bold dark:bg-green-900/20 dark:text-green-400 border-l-4 border-green-600' : 'text-gray-700 dark:text-gray-200 border-l-4 border-transparent' }} flex items-center py-3 px-5 transition-all duration-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 hover:text-green-600 dark:hover:text-white"
    wire:navigate>
    <span class="text-sm tracking-wide">{{ $slot }}</span>
</a>
