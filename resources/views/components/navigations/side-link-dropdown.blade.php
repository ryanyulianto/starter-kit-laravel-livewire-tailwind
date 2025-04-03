@props([
    'icon' => 'ti ti-credit-card-pay',
    'title' => 'menu',
    'active' => false,
    'use_icon' => false,
    'active_class' => 'bg-[var(--sidebar-active-accent-bg)] text-[var(--sidebar-active-accent-text)]',
    'arrow_color' => 'hs-accordion-active:text-white',
])

<li class="mb-2 hs-accordion " id="{{ Str::slug($title) }}-accordion" 
    x-data="{ isOpen: {{ $active ? 'true' : 'false' }} }">
    <button type="button"
        @click="isOpen = !isOpen"
        class="flex gap-x-3.5 items-center px-2.5 py-2 w-full text-sm rounded-lg hs-accordion-toggle text-start cursor-pointer"
        :class="isOpen
            ? ({{ $active ? 'true' : 'false' }} ? '{{ $active_class }}' : 'text-[var(--sidebar-hover-accent-text)] bg-[var(--sidebar-hover-accent-bg)]')
            : 'text-gray-600 dark:text-gray-300 hover:text-[var(--sidebar-hover-accent-text)] hover:bg-[var(--sidebar-hover-accent-bg)]'"
            >
        
        @if ($use_icon)
            <i class="{{ $icon }} text-xl"></i>
        @endif
        
        <span class="text-base">{{ $title }}</span>

        <i class="transition-transform duration-300 ti ti-chevron-down ms-auto size-4"
           :class="{'rotate-180': isOpen}"></i>
    </button>

    <div id="{{ Str::slug($title) }}-content"
        x-show="isOpen"
        x-transition:enter="transition-all ease-out duration-300"
        x-transition:enter-start="transform opacity-0 max-h-0 -translate-y-4 scale-y-75 origin-top"
        x-transition:enter-end="transform opacity-100 max-h-96 translate-y-0 scale-y-100"
        x-transition:leave="transition-all ease-in duration-200"
        x-transition:leave-start="transform opacity-100 max-h-96 translate-y-0 scale-y-100"
        x-transition:leave-end="transform opacity-0 max-h-0 -translate-y-4 scale-y-75 origin-top"
        class="overflow-hidden w-full">
        <ul class="pt-2 ps-3">
            {{ $slot }}
        </ul>
    </div>
</li>