@props(['size' => 'small'])

@php
    $sizeClass = $size === 'large' ? 'text-sm px-4 py-1' : 'text-xs px-2.5 py-0.5 bg-green-100 rounded-full';
@endphp

<span {{ $attributes->merge(['class' => "cursor-pointer hover:bg-green-200 text-green-800 font-semibold  dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center $sizeClass"]) }}>
    {{ $slot }}
</span>
