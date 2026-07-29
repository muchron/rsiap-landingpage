@props(['size' => 'small'])

@php
    $sizeClass = $size === 'large' ? 'text-sm px-4 py-1' : 'text-xs px-2.5 py-0.5 bg-blue-100 rounded-full';
@endphp

<span {{ $attributes->merge(['class' => "cursor-pointer hover:bg-blue-200 text-blue-800 font-semibold  dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center $sizeClass"]) }}>
    {{ $slot }}
</span>
