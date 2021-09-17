@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'mb-4 p-4 bg-red-600 text-white']) !!}>
        <div class="font-medium">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
