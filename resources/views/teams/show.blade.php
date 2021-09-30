<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Team Settings') }}</h2>
    </x-slot>

    <div>
        <div class="container">
            @livewire('teams.update-team-name-form', ['team' => $team])
            @livewire('teams.team-member-manager', ['team' => $team])

            @if (Gate::check('delete', $team) && ! $team->personal_team)
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('teams.delete-team-form', ['team' => $team])
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
