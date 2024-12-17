<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">

    <tallstackui:script /> 
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="bg-gray-100 font-poppins">
    <main>
        <div class="flex">
            <livewire:admin.partials.sidebar.sidebar-index />
            <div class="w-full lg:ml-[300px] ml-0 overflow-hidden">
                <livewire:admin.partials.headers.header-index  />
                <main class="h-full max-w-full pt-20 overflow-y-auto">
                    <div class="container w-full pt-5 overflow-hidden pb-36">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </main>
    @livewireScripts
</body>

</html>
