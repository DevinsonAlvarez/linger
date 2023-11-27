@props(['class' => ''])

<button {{ $attributes->merge(['class' => "$class text-white px-2 py-2 rounded-lg flex items-center"]) }}>
    {{ $slot }} </button>
