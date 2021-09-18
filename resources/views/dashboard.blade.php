<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Dashboard') }}</h2>
    </x-slot>

    <div>
        <div class="container py-12">
            <div class="bg-white overflow-hidden shadow-xl">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
