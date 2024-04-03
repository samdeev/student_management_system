<select {{ $attributes->merge(['class' => 'block w-full border border-zinc-300 bg-white h-10 px-3 rounded-md']) }}>
    {{ $slot }}
</select>
