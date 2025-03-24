<div class="">
    <div class="relative overflow-hidden">
        <label class="sr-only">Search</label>
        <input
            {{ $attributes->merge(['type' => 'text', 'name' => 'hs-table-with-pagination-search', 'id' => 'hs-table-with-pagination-search', 'placeholder' => 'Cari Di sini', 'class' => 'py-2 px-3 ps-9 block w-full border-gray-300 shadow-sm rounded-lg text-sm focus:border-accent-600 dark:focus:border-accentDark-2 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-dark-2 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-0 custom-placeholder']) }}>
        <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
            <svg class="text-gray-500 size-4 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg>
        </div>
    </div>
</div>
