@if ($paginator->hasPages())
    <nav class="flex items-center -space-x-px bg-[var(--bg-2)] rounded-lg">
        {{-- Tombol Previous --}}
        @if ($paginator->onFirstPage())
            <button type="button"
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-[var(--border)] text-[var(--fg-2)] hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700  dark:hover:bg-white/10 dark:focus:bg-white/10"
                disabled>
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span class="hidden sm:block">Previous</span>
            </button>
        @else
            <button wire:click="previousPage" type="button"
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span class="hidden sm:block">Previous</span>
            </button>
        @endif

        {{-- Link Angka Halaman --}}
        @foreach ($elements as $element)
            {{-- Jika itu adalah array dari halaman --}}
            @if (is_array($element))
                @foreach ($element as $pageNumber => $url)
                    @if ($pageNumber == $paginator->currentPage())
                        <button type="button"
                            class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-gray-200 text-gray-800 border border-gray-200 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-600 dark:border-neutral-700 dark:text-white dark:focus:bg-neutral-500">{{ $pageNumber }}</button>
                    @elseif (
                        $pageNumber == 1 ||
                            $pageNumber == $paginator->lastPage() ||
                            ($pageNumber >= $paginator->currentPage() - 2 && $pageNumber <= $paginator->currentPage() + 2))
                        <button wire:click="gotoPage({{ $pageNumber }})" type="button"
                            class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">{{ $pageNumber }}</button>
                    @elseif ($pageNumber == $paginator->currentPage() - 3 || $pageNumber == $paginator->currentPage() + 3)
                        <span
                            class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 dark:text-white">...</span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Tombol Next --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" type="button"
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="hidden sm:block">Next</span>
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        @else
            <button type="button"
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                disabled>
                <span class="hidden sm:block">Next</span>
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        @endif
    </nav>
@endif
