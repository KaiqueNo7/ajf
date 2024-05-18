@php 
$classes = "text-white bg-orange-500 py-2 px-4 uppercase rounded-lg hover:bg-orange-600 transition-all";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>