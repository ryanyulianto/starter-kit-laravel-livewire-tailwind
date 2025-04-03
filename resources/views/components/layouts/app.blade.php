<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="tallstackui_darkTheme({ default: 'light' })">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.31.0/dist/tabler-icons.min.css" />


    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>

    <style>
        .sidebar-transition {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .sidebar-hidden {
            transform: translateX(-100%);
            opacity: 0;
        }

        .sidebar-visible {
            transform: translateX(0);
            opacity: 1;
        }

        .content-transition {
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        .content-full {
            margin-left: 0 !important;
            width: 100% !important;
        }

        .content-full-header {
            padding-left: 0 !important;
            width: 100% !important;
        }
    </style>
</head>

<body class="font-poppins" x-data="{
        sidebarHidden: window.innerWidth < 1024, 
        checkScreenSize() {
            this.sidebarHidden = window.innerWidth < 1024;
        }
    }" x-init="checkScreenSize(); window.addEventListener('resize', checkScreenSize)"
    x-bind:class="{ 'dark bg-[var(--main-bg)]': darkTheme, 'bg-gray-50': !darkTheme }">
    <x-ts-toast /> 
    <main>
        <div class="flex">
            <livewire:admin.partials.sidebar.sidebar-index />
            <div class="fixed inset-0 bg-black/50 z-[79] lg:hidden transition-opacity duration-300"
                x-show="!sidebarHidden && window.innerWidth < 1024" x-on:click="sidebarHidden = true">
            </div>
            <div class="w-full lg:ml-[300px] ml-0 content-transition" x-bind:class="{ 'content-full': sidebarHidden }">
                <livewire:admin.partials.headers.header-index />
                <main class="overflow-y-auto pt-20 max-w-full h-full">
                    <div class="container overflow-hidden pt-2 pb-32 w-full min-h-screen">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </main>
    @livewireScripts
</body>

</html>