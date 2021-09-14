@props(['disabled' => false])

<div class="mt-1 border-b border-gray-600 focus-within:border-blue-600">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full border-0 border-b border-transparent bg-gray-300 focus:border-blue-600 focus:ring-0 sm:text-sm']) !!}>
</div>
