<a {{ $attributes->merge([
    'class' => 'bg-zinc-950 text-white px-5 py-2 rounded-md hover:bg-zinc-900 transition duration-150 ease-in'
    ]) }}>
    {{ $slot }}
</a>
