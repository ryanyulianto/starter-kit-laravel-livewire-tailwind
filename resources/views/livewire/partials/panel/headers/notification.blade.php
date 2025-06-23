<div>
    <x-ts-slide id="notification-area">
        <x-slot:title>
            Notification
        </x-slot:title>
        <div class="">

            <!-- Tabs -->
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="mr-2">
                        <a href="#"
                            class="inline-block p-4 border-b-2 border-indigo-600 text-indigo-600 dark:text-indigo-400 dark:border-indigo-400 rounded-t-lg active">
                            Semua
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="inline-block p-4 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300 rounded-t-lg">
                            Belum dibaca
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Today's Notifications -->
            <div class="mb-4">
                <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Hari Ini
                </h4>

                <!-- Unread Notification Item -->
                <div
                    class="bg-indigo-50 dark:bg-indigo-900/20 p-3 rounded-lg mb-2 border-l-4 border-indigo-500 dark:border-indigo-400">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-3">
                            <div
                                class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    Permintaan Baru
                                </p>
                                <span class="text-xs text-gray-500 dark:text-gray-400">10:45</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
                                Ada permintaan baru dari <span class="font-medium">Ryan Yulianto</span> yang memerlukan
                                persetujuan anda.
                            </p>
                            <div class="mt-2 flex space-x-2">
                                <button
                                    class="px-3 py-1 bg-indigo-600 text-white text-xs rounded-md hover:bg-indigo-700 transition">
                                    Lihat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Read Notification Item -->
                <div class="bg-white dark:bg-gray-800 p-3 rounded-lg mb-2 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-3">
                            <div
                                class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    Permintaan Disetujui
                                </p>
                                <span class="text-xs text-gray-500 dark:text-gray-400">08:27</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
                                Permintaan vaksinasi untuk <span class="font-medium">Budi Santoso</span> telah
                                disetujui.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Yesterday's Notifications -->
            <div class="mb-4">
                <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Kemarin
                </h4>

                <!-- Read Notification Item -->
                <div class="bg-white dark:bg-gray-800 p-3 rounded-lg mb-2 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-3">
                            <div
                                class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    Stok Hampir Habis
                                </p>
                                <span class="text-xs text-gray-500 dark:text-gray-400">Kemarin</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
                                Stok Vaksin <span class="font-medium">Sinovac</span> hampir habis. Segera lakukan
                                penambahan stok.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Read Notification Item -->
                <div class="bg-white dark:bg-gray-800 p-3 rounded-lg mb-2 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-3">
                            <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    Laporan Kesalahan Sistem
                                </p>
                                <span class="text-xs text-gray-500 dark:text-gray-400">Kemarin</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
                                Terjadi kesalahan saat menyimpan data pasien. Silakan hubungi administrator sistem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Last Week's Notifications -->
            <div>
                <h4 class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Minggu
                    Lalu</h4>

                <!-- Read Notification Item -->
                <div class="bg-white dark:bg-gray-800 p-3 rounded-lg mb-2 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-3">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                                    Pengguna Baru
                                </p>
                                <span class="text-xs text-gray-500 dark:text-gray-400">1 minggu yang lalu</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
                                5 pengguna baru telah bergabung dengan sistem. Lihat daftar lengkapnya di panel admin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty State (Hidden by default) -->
            <div class="hidden text-center py-8">
                <div
                    class="inline-flex justify-center items-center w-16 h-16 rounded-full bg-gray-100 dark:bg-gray-700 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-1">Tidak ada notifikasi</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Kami akan memberi tahu Anda ketika ada yang baru
                </p>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-4">
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-md text-sm hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    Muat lebih banyak
                </button>
            </div>
         
        </div>
    </x-ts-slide>
</div>