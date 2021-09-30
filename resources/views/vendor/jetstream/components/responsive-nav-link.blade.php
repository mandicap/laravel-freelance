@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-200 bg-gray-100 text-sm font-medium text-gray-600 focus:outline-none focus:text-gray-600 focus:bg-gray-100 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-sm font-medium text-gray-500 hover:text-gray-600 hover:bg-gray-100 hover:border-gray-200 focus:outline-none focus:text-gray-600 focus:bg-gray-100 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
