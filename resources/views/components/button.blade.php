@props([
    'url',
])
<div>
    <a type="submit"
       class="block max-w-min bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 px-3"
    href="{{ route($url) }}">
        {{ $slot }}
    </a>
</div>
