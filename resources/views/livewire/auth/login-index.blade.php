<div
    class="min-h-screen flex items-center justify-center sm:p-6 bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 overflow-hidden">
    <div class="w-full sm:max-w-md relative h-screen sm:h-auto">
        <!-- Abstract shapes (decorative) -->
        <div
            class="absolute -top-20 -left-28 w-60 h-60 bg-indigo-600/20 dark:bg-indigo-600/10 rounded-full filter blur-xl opacity-70 animate-pulse">
        </div>
        <div class="absolute -bottom-16 -right-12 w-40 h-40 bg-purple-600/20 dark:bg-purple-600/10 rounded-full filter blur-xl opacity-70 animate-pulse"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-20 right-12 w-24 h-24 bg-pink-600/10 dark:bg-pink-600/5 rounded-full filter blur-xl opacity-70 animate-pulse"
            style="animation-delay: 2s;"></div>

            <div class="sm:flex justify-center items-center mb-16 w-full hidden">
                <img src="{{ asset('assets/logos/logo.png') }}" alt="" class="w-40">
            </div>
        <!-- Card Container -->
        <div
            class="relative bg-[var(--bg-2)] h-full sm:h-auto sm:rounded-2xl shadow-2xl shadow-gray-400/10 dark:shadow-black/30 overflow-hidden border border-gray-200 dark:border-gray-700 backdrop-blur-sm ">
            <!-- Header with abstract wave -->
            <div
                class="h-40 sm:h-32 bg-gradient-to-r from-indigo-600 to-purple-600 relative flex items-center justify-center  ">
                {{-- <div class="bg-black/60 absolute h-full z-10 w-full">
                    <div class="flex justify-center items-center absolute top-5 w-full">
                        <img src="{{ asset('assets/logos/logo.png') }}" alt="" class="w-40">
                    </div>
                </div> --}}
                <!-- Decorative wave pattern -->
                <div class="absolute inset-0 opacity-20 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                        class="w-full h-full text-white fill-current">
                        <path
                            d="M0,96L30,106.7C60,117,120,139,180,128C240,117,300,75,360,80C420,85,480,139,540,144C600,149,660,107,720,90.7C780,75,840,85,900,117.3C960,149,1020,203,1080,208C1140,213,1200,171,1260,149.3C1320,128,1380,128,1410,128L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                        </path>
                    </svg>
                </div>

                <div
                    class="absolute -bottom-10 w-24 h-24 bg-[var(--bg-2)] rounded-full flex items-center justify-center border-4 border-white dark:border-gray-800 shadow-lg z-20">
                    <div
                        class="bg-gradient-to-br from-indigo-600 to-purple-600 w-20 h-20 rounded-full flex items-center justify-center text-white shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>

            </div>


            <div class="flex justify-center items-center pt-16 w-full sm:hidden">
                <img src="{{ asset('assets/logos/logo.png') }}" alt="" class="w-40">
            </div>

            <!-- Form Content -->
            <div class="px-8 pt-16 pb-8">
                <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-100 mb-1">Admin Dashboard</h2>
                <p class="text-gray-500 dark:text-gray-400 text-center text-sm mb-8">Masuk untuk melanjutkan</p>

                <form class="space-y-6" wire:submit="login">
                    <!-- Email Field -->
                    <div class="space-y-1">
                        <x-ts-input type="email" label="Email *" icon="envelope" wire:model="email" />
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-1">
                        <x-ts-password type="password" label="Password *" icon="key" wire:model="password" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-2">
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="h-4 w-4 text-indigo-600 border-gray-300 dark:border-gray-600 rounded focus:ring-indigo-500 dark:bg-gray-700" wire:model="remember" />
                            <label for="remember_me" class="ml-2 block text-sm text-gray-600 dark:text-gray-400">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#"
                            class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 transition-colors duration-200">
                            Lupa password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <div class="pt-2">
                        <x-buttons.button type="submit" iconClass="ti ti-login-2 text-lg" color="primary" isGradient="true"
                            class="w-full gap-2" gradientFrom="indigo-600" gradientTo="purple-600" gradientDir="r" target="login">
                            Masuk Ke Sistem
                        </x-buttons.button>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="text-center py-4 bg-[var(--bg-2)]/80 border-t border-gray-100 dark:border-gray-700/80">
                <p class="text-xs text-gray-500 dark:text-gray-400">
                    © {{ date('Y') }} Admin System | <span class="text-indigo-500 font-medium">PT. Perusahaan
                        Indonesia</span>
                </p>
            </div>
        </div>

        <!-- Security Badge -->
        <div class="flex items-center justify-center mt-6">
            <div
                class="flex items-center space-x-1 text-xs text-gray-500 dark:text-gray-400 bg-white/50 dark:bg-gray-800/50 px-3 py-1.5 rounded-full backdrop-blur-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <span>Koneksi aman dan terenkripsi</span>
            </div>
        </div>
    </div>
</div>