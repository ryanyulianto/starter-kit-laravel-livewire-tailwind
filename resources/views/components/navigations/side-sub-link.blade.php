@props(['icon' => 'ti ti-layout-dashboard', 'active' => false, 'withIcon' => true])
{{-- text-gray-600 dark:text-gray-300 hover:text-accent-600 hover:bg-accent-100  dark:hover:text-gray-300 dark:hover:bg-dark-bg-600  --}}
<li class="mb-2 group">
    <a
        {{ $attributes->merge(['class' => ' gap-3 py-2 px-3 rounded-md ' . ($active ? 'bg-[var(--sidebar-active-accent-bg)] text-[var(--sidebar-active-accent-text)] ' : 'text-gray-600 dark:text-gray-300 hover:text-[var(--sidebar-hover-accent-text)] hover:bg-[var(--sidebar-hover-accent-bg)]  ') . 'w-full flex items-center text-base ']) }}>
        @if ($withIcon)
            <i class="{{ $icon }} text-xl "></i><span>{{ $slot }}</span>
        @else
            <div class="flex gap-2 justify-center items-center">
                <i class="text-lg transition-all duration-500 ti ti-arrow-narrow-right group-hover:rotate-90"></i>
                {{-- <span class="w-[6px] h-[6px] {{ $active ? 'bg-accent-500 ' : 'bg-gray-400 ' }} rounded-full"></span> --}}
                <span>{{ $slot }}</span>
            </div>
        @endif
    </a>
</li>
