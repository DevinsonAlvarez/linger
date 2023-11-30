@props(['color' => 'secondary'])

@php
    $color = "bg-$color disabled:bg-$color-light hover:bg-$color-dark ";
@endphp

<button {{ $attributes->merge(['class' => $color . ' text-white p-2 rounded-md flex items-center']) }}>
    {{ $slot }} </button>
