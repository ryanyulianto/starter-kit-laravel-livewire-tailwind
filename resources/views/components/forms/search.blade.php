@props(['target' => null])
<div class="">
    <div class="relative ">
        <label class="sr-only">Search</label>
        <input {{ $attributes->merge(['type' => 'text', 'name' => 'hs-table-with-pagination-search', 'id' => 'hs-table-with-pagination-search', 'placeholder' => 'Cari Di sini', 'class' => 'py-2 px-3 ps-9 pe-9 block w-full text-[var(--fg-2)] bg-[var(--input)] border border-[var(--border)] rounded-lg text-sm focus:outline-2 focus:outline-[var(--ring)] disabled:opacity-50 disabled:pointer-events-none']) }}>

        <div class="absolute inset-y-0 left-0 flex items-center ps-3">
            <svg class="text-[var(--fg-2)] size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg>
        </div>
        <!-- Loading Spinner -->
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" wire:loading
            wire:target="{{ $target ?? 'filters.search' }}">
            <svg class="animate-spin size-4 text-[var(--fg-2)]" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="m4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
        </div>

    </div>
</div>