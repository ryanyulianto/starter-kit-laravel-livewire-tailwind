@props(['icon' => 'ti ti-layout-dashboard', 'active' => false, 'withIcon' => true])
<li class="mb-2 ">
    <a
        {{ $attributes->merge(['class' => ' gap-3 py-2 px-3 rounded-md ' . ($active ? 'bg-accent-600 text-white dark:bg-accentDark-1 dark:text-accentDark-5 ' : 'text-gray-600 dark:text-accentDark-3 hover:text-accent-600 hover:bg-accent-100 dark:hover:text-accentDark-5 dark:hover:bg-accentDark-1 ') . 'w-full  flex items-center text-base ']) }}>
        @if ($withIcon)
            <i class="{{ $icon }} text-xl "></i><span class="w-full">{{ $slot }}</span>
        @else
            <span class="w-full">{{ $slot }}</span>
        @endif
    </a>
</li>
