<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="tallstackui_darkTheme()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.26.0/dist/tabler-icons.min.css">


    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="bg-gray-100 font-poppins" x-bind:class="{ 'dark bg-neutral-600': darkTheme, 'bg-gray-100': !darkTheme }">
    <main>
        <div class="flex">
            <livewire:admin.partials.sidebar.sidebar-index />
            <div class="w-full lg:ml-[300px] ml-0 overflow-hidden">
                <livewire:admin.partials.headers.header-index />
                <main class="overflow-y-auto pt-20 max-w-full h-full">
                    <div class="container overflow-hidden pt-5 pb-32 w-full">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </main>
    @livewireScripts
</body>

</html>