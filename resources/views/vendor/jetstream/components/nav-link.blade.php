@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-400 border-b border-transparent focus:outline-none focus:border-blue-700 transition'
    : 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 border-b border-transparent hover:text-gray-400 focus:outline-none focus:border-blue-700 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
