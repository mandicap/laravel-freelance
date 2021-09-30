<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}">

    @livewireStyles

</head><body>

    <x-jet-banner />

    <div id="app">
        <header class="bg-gray-800 pb-32">
            @livewire('navigation-menu')

            @isset($header)
                <div class="page-header">
                    {{ $header }}
                </div>
            @endisset
        </header>

        <main class="-mt-32">
            {{ $slot }}
        </main>

        <footer class="pt-12 pb-6">
            <div class="container pt-6 border-t border-gray-300 text-center">
                <a href="https://builtnoble.dev" class="inline-flex items-center font-semibold text-xs text-gray-400 uppercase">
                    made with
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-1 text-red-700" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    by Builtnoble
                </a>
            </div>
        </footer>
    </div>

    @stack('modals')

    @livewireScripts

    <script src="{{ mix('js/scripts.js') }}"></script>

</body></html>
