@props(['disabled' => false])

<div class="focus-within:border-blue-600">
    <input {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
</div>
