@props(['fixedCol' => false])

@php
    $class = 'px-6 py-4 text-sm font-semibold text-gray-900 uppercase border border-gray-300 text-start text-nowrap';

    if ($fixedCol) {
        $class .= ' lg:sticky left-0 z-[1] bg-gray-200 ';
    }
@endphp

<th scope="col" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</th>
