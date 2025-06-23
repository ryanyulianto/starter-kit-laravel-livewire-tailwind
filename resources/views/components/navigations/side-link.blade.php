@props(['icon' => 'ti ti-layout-dashboard', 'active' => false, 'withIcon' => true])
<li class="mb-2">
    <a {{ $attributes->merge(['class' => ' gap-3 py-2 px-3 rounded-md ' . ($active ? 'bg-[var(--sidebar-active-accent-bg)] border-l-5 border-[var(--color-main-accent)] text-[var(--sidebar-active-accent-text)] ' : 'text-gray-600 dark:text-gray-300 hover:text-[var(--sidebar-hover-accent-text)] hover:bg-[var(--sidebar-hover-accent-bg)]  ') . 'w-full  flex items-center text-base ']) }}>
        @if ($withIcon)
            <i class="{{ $icon }} text-xl "></i><span class="w-full">{{ $slot }}</span>
        @else
            <span class="w-full">{{ $slot }}</span>
        @endif
    </a>
</li>