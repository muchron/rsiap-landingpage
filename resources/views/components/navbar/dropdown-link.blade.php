@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}" {{ $attributes }}
    class="{{ $active ? 'text-blue-600 font-semibold' : 'text-gray-700' }} flex items-center py-3 md:py-2 md:px-4 px-2 rounded-xl transition hover:bg-gray-100 md:hover:bg-gray-100 md:hover:text-blue-600 dark:hover:bg-gray-700 dark:text-gray-200 dark:hover:text-white"
    wire:navigate>
    {{ $slot }}
</a>
