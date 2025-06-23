<div>
        <x-ts-layout.header>
            <x-slot:left>
                <div class="flex flex-col">
                    <span class="text-[10px] text-slate-500 dark:text-slate-400" x-data="{
                                        greeting: '',
                                        initGreeting() {
                                            const hour = new Date().getHours();
                                            if (hour >= 5 && hour < 12) {
                                                this.greeting = 'Hai, Selamat Pagi';
                                            } else if (hour >= 12 && hour < 15) {
                                                this.greeting = 'Hai, Selamat Siang';
                                            } else if (hour >= 15 && hour < 18) {
                                                this.greeting = 'Hai, Selamat Sore';
                                            } else {
                                                this.greeting = 'Hai, Selamat Malam';
                                            }
                                        }
                                    }" x-init="initGreeting()" x-text="greeting"></span>
                    <span class="text-[12px] text-slate-900 dark:text-slate-200">{{ Auth::user()->name }}
                        ({{ Auth::user()->roles()->first()->name }})
                    </span>
                </div>
            </x-slot:left>
            <x-slot:right>
                <div class="flex items-center space-x-3">
                    <button
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-theme-accent bg-bg-1 dark:bg-bg-3 text-theme-accent transition-colors hover:bg-bg-2 cursor-pointer"
                        x-bind:title="darkTheme ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                        x-on:click="darkTheme = !darkTheme">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="darkTheme">
                            <path
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!darkTheme">
                            <path
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </button>
                    <x-ts-dropdown>
                        <x-slot:action>
                            <div class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-bg-1 text-sm font-medium dark:bg-bg-3 border-theme-accent border hover:bg-bg-2"
                                x-data="{
                                            userName: '{{ Auth::user()->name }}',
                                            initials: ''
                                        }" x-init="const names = userName.split(' ');
                                        initials = names.map(name => name.charAt(0)).join('');
                                        if (initials.length > 2) initials = initials.substring(0, 2);"
                                x-on:click="show = !show">
                                <span class="text-theme-accent" x-text="initials"></span>
                            </div>
                        </x-slot:action>
                        <x-ts-dropdown.items icon="tabler.logout-2" text="Logout" wire:click="logout" />
                    </x-ts-dropdown>
                </div>
            </x-slot:right>
        </x-ts-layout.header>
</div>