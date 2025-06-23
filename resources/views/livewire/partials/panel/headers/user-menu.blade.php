<x-ts-dropdown>
    <x-slot:action>
        <button x-on:click="show = !show" type="button"
            class="h-[2.375rem] inline-flex justify-center items-center gap-x-4 text-sm font-semibold rounded-full   disabled:opacity-50 disabled:pointer-events-none">
            <div class="hidden sm:block">
                <h1 class="text-sm text-gray-900 capitalize text-end dark:text-gray-300">{{ Auth::user()->name }}
                </h1>
                <p class="text-xs font-normal text-gray-600 capitalize dark:text-gray-500 text-end">
                    {{ Auth::user()->roles->first()->name }}
                </p>
            </div>
            <div
                class="uppercase bg-black rounded-full w-12 h-12 text-white flex items-center justify-center font-semibold text-[18px] border border-border-1 dark:border-borderDark-1">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            {{-- @if (Auth::user()?->userDetail()?->select('profile_image')->first()?->profile_image !== null)
                <img class="inline-block size-[38px] rounded-full object-cover object-top ring-1 ring-neutral-800"
                    src="{{ Storage::url(Auth::user()?->userDetail()?->select('profile_image')->first()?->profile_image) }}"
                    alt="Image Description">
            @else
                <div
                    class="uppercase bg-black rounded-full w-12 h-12 text-white flex items-center justify-center font-semibold text-[18px] border border-border-1 dark:border-borderDark-1">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
            @endif --}}
        </button>
    </x-slot:action>
    <x-ts-dropdown.items icon="cog" text="Settings" />
    <form wire:submit="logout">
        <x-ts-dropdown.items type="submit" icon="arrow-left-on-rectangle" text="Logout" separator />
    </form>
</x-ts-dropdown>
