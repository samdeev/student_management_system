@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-1.5 text-sb text-zinc-700 font-medium']) }}>
    {{ $value ?? $slot }}
</label>
