@props([
'icon' => 'person',
'placeholder' => 'placeholder'
])

<div {{ $attributes->merge(['class' => 'flex items-center border-2 py-2 px-3 rounded-2xl']) }}>
    <span class="material-symbols-outlined">
        {{ $icon }}
    </span>
    <input class="pl-2 outline-none border-none w-full" type="text" name="" id="" placeholder="{{ $placeholder }}" />
</div>
