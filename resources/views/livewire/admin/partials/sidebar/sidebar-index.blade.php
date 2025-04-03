<div>
    <aside
        class="hs-overlay overflow-y-auto transform lg:block lg:end-auto lg:bottom-0 fixed top-0 with-vertical h-screen z-[80] flex-shrink-0 border-r-[1px] w-[300px] border-border-1 dark:border-borderDark-1 bg-[var(--sidebar)] left-sidebar sidebar-transition"
        x-bind:class="{ 'sidebar-hidden': sidebarHidden, 'sidebar-visible': !sidebarHidden, 'sidebar-hidden': sidebarHidden || window.innerWidth < 1024 }">

        <div class="flex flex-col gap-2 items-start px-6 py-3 text-gray-600 dark:text-accentDark-3">
            <div class="flex justify-between items-center w-full">
                <img src="{{ asset('assets/logos/logo.png') }}" alt="Logo" class="w-20">
            </div>
        </div>
        <div class="overflow-y-auto" data-simplebar="">
            <div class="px-6 mt-4">
                <nav class="flex flex-col w-full hs-accordion-group sidebar-nav">
                    <ul id="sidebarnav" class="text-sm text-gray-600 dark:text-accentDark-3">
                        <!-- Include your sidebar menu here -->
                        @include('livewire.admin.partials.sidebar._menu')
                    </ul>
                </nav>
            </div>
        </div>
    </aside>
</div>