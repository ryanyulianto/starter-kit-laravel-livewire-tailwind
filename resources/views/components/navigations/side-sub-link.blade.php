@props(['icon' => 'ti ti-layout-dashboard', 'active' => false, 'withIcon' => true])
<li class="mb-2 group">
    <a
        {{ $attributes->merge(['class' => ' gap-3 py-2 px-3 rounded-md ' . ($active ? 'bg-accent-100 text-accent-600 dark:bg-accentDark-1 dark:text-accentDark-5 ' : 'text-gray-600 dark:text-accentDark-3 hover:text-accent-600 hover:bg-accent-100 dark:hover:text-accentDark-5 dark:hover:bg-accentDark-1 ') . 'w-full flex items-center text-base ']) }}>
        @if ($withIcon)
            <i class="{{ $icon }} text-xl "></i><span>{{ $slot }}</span>
        @else
            <div class="flex items-center justify-center gap-2">
                <i class="text-lg transition-all duration-500 ti ti-arrow-narrow-right group-hover:rotate-90"></i>
                {{-- <span class="w-[6px] h-[6px] {{ $active ? 'bg-accent-500 ' : 'bg-gray-400 ' }} rounded-full"></span> --}}
                <span>{{ $slot }}</span>
            </div>
        @endif
    </a>
</li>
