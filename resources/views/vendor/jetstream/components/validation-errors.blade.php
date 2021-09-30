@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert danger']) !!}>
        <h3>{{ __('Whoops! Something went wrong.') }}</h3>

        <ul class="mt-3 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
