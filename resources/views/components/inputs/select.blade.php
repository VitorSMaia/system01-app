@props([
'icon' => 'person',
'placeholder' => 'placeholder'
])

<div {{ $attributes->merge(['class' => 'flex items-center border-2 py-2 px-3 rounded-2xl']) }}>
    <span class="material-symbols-outlined">
        {{ $icon }}
    </span>
    <select  placeholder="{{ $placeholder }}"  class="pl-2 outline-none border-none w-full" name="cars" id="cars" form="carform">
        {{ $slot }}
    </select>
</div>
