@props(['fixedCol' => false, 'disabledColor' => false])

@php
    $class =
        'px-6 py-4 text-sm text-gray-600 capitalize transition-all border whitespace-nowrap group-hover:bg-gray-50/50';

    if ($fixedCol) {
        $class .= ' lg:sticky left-0 z-[1]';
        if ($disabledColor) {
            $class .= ' bg-gray-100';
        } else {
            $class .= ' bg-white';
        }
    }

@endphp
<td {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</td>
