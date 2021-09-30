<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Create Team') }}</h2>
    </x-slot>

    <div>
        <div class="container py-10">
            @livewire('teams.create-team-form')
        </div>
    </div>
</x-app-layout>
