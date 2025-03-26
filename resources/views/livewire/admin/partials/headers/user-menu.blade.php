<div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
    <button id="hs-dropdown-with-header" type="button"
        class="h-[2.375rem] inline-flex justify-center items-center gap-x-4 text-sm font-semibold rounded-full   disabled:opacity-50 disabled:pointer-events-none">
        <div class="hidden sm:block">
            <h1 class="text-sm text-gray-900 capitalize text-end dark:text-gray-300">Ryan Yulianto
            </h1>
            <p class="text-xs font-normal text-gray-600 capitalize dark:text-gray-500 text-end">
                Superadmin
            </p>
        </div>
        {{-- @if (Auth::user()?->employeeDetail()?->select('profile_photo')->first()?->profile_photo !== null)
            <img class="inline-block size-[38px] rounded-full object-cover object-top ring-1 ring-neutral-800"
                src="{{ Storage::url(Auth::user()?->employeeDetail()?->select('profile_photo')->first()?->profile_photo) }}"
                alt="Image Description">
        @else
            <div
                class="uppercase bg-black rounded-full w-12 h-12 text-white flex items-center justify-center font-semibold text-[18px] border border-border-1 dark:border-borderDark-1">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
        @endif --}}
        <div
            class="uppercase bg-black rounded-full w-12 h-12 text-white flex items-center justify-center font-semibold text-[18px] border border-border-1 dark:border-borderDark-1">
            ry
        </div>
    </button>

    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white dark:bg-dark-1 shadow-md rounded-lg p-2 border border-border-1 dark:border-borderDark-1"
        aria-labelledby="hs-dropdown-with-header">
        <div class="block px-5 py-3 -m-2 bg-white rounded-t-lg dark:bg-dark-2 sm:hidden">
            <h1 class="text-sm text-gray-900 text-start dark:text-accentDark-5">Ryan Yulianto</h1>
            <p class="text-xs font-normal text-gray-600 dark:text-accentDark-3 text-start">
                Superadmin
            </p>
        </div>
        <div class="py-2 mt-2 sm:mt-0 first:pt-0 last:pb-0">
            <a class="flex gap-x-3.5 items-center px-3 py-2 text-sm text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-accentDark-3 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
               >
                <i class="ti ti-user-circle flex-shrink-0 text-[18px]"></i>
                Profile
            </a>
            {{-- <form action="" class="pt-4 pb-3 px-3 mt-4 border-t-[1px] border-border-1 dark:border-borderDark-1">
                <x-auth.logout-btn>
                    <button wire:click="logout" type="button"
                        class="flex gap-2 justify-start items-center w-full text-gray-900 rounded-lg dark:text-accentDark-3 hover:text-red-600 dark:hover:text-red-600">
                        <i class="ti ti-logout-2 flex-shrink-0 text-[18px]"></i>
                        Keluar
                    </button>
                </x-auth.logout-btn>
            </form> --}}
        </div>
    </div>
</div>
