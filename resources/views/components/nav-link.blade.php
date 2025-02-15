@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'bg-shark-50 text-primary'
        : 'text-shark-950 hover:bg-shark-50 hover:text-primary';
@endphp

<a {{ $attributes->merge(['class' => 'flex items-center p-2 rounded-md gap-x-3 ' . $classes]) }}>
    {{ $slot }}
</a>
