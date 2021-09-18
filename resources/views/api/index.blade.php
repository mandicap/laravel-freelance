<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('API Tokens') }}</h2>
    </x-slot>

    <div>
        <div class="container py-10">
            @livewire('api.api-token-manager')
        </div>
    </div>
</x-app-layout>
