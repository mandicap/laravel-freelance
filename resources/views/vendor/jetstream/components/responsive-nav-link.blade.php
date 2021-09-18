@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-blue-600 bg-blue-400 text-base font-medium text-white focus:outline-none focus:text-white focus:bg-blue-400 focus:border-blue-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-blue-200 hover:text-white hover:bg-blue-400 hover:border-blue-600 focus:outline-none focus:text-white focus:bg-blue-400 focus:border-blue-700 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
