<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'px-5 py-2 bg-zinc-950 text-white rounded-md hover:bg-zinc-900 transition duration-150 ease-in'
    ]) }}>
    {{ $slot }}
</button>
