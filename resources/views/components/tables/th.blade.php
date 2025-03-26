@props(['fixedCol' => false])

@php
    $class = 'px-6 py-4 text-sm font-semibold text-[var(--fg-2)] uppercase border border-[var(--border)] text-start text-nowrap';

    if ($fixedCol) {
        $class .= ' lg:sticky left-0 z-[1] bg-gray-200 ';
    }
@endphp

<th scope="col" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</th>
