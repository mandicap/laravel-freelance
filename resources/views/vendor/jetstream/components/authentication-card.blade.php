<div class="container flex flex-col items-center justify-center min-h-screen">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full mt-6 p-8 overflow-hidden bg-gray-400 sm:max-w-md">
        {{ $slot }}
    </div>
</div>
