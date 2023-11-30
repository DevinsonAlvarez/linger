@props(['color' => 'secondary'])

@php
    $color = "bg-$color hover:bg-$color-dark disabled:bg-$color-light";
@endphp

<button {{ $attributes->merge(['class' => $color . ' text-white p-2 rounded-md flex items-center']) }}>
    {{ $slot }} </button>
