<div>
    <aside id="application-sidebar-brand"
        class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full overflow-y-auto transform hidden lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 fixed top-0 with-vertical h-screen z-[50] flex-shrink-0 border-r-[1px] w-[300px] border-border-1 dark:border-borderDark-1  bg-white dark:bg-dark-1 left-sidebar transition-transform duration-300">

        <div class="flex flex-col items-start gap-2 px-6 py-3 text-gray-600 dark:text-accentDark-3">
            <img src="{{ asset('assets/logos/logo.png') }}" alt="Logo" class="w-32">
        </div>
        <div class="overflow-y-auto" data-simplebar="">
            <div class="px-6 mt-4">
                <nav class="flex flex-col w-full hs-accordion-group sidebar-nav">
                    <ul id="sidebarnav" class="text-sm text-gray-600 dark:text-accentDark-3">
                        @include('livewire.admin.partials.sidebar._menu')
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

</div>
