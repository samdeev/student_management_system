@props(['field'])

@error($field)
    <p class="block mt-1 text-red-500 text-sb">{{ $message }}</p>
@enderror
