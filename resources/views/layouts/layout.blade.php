<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasks Hero</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="font-sans bg-background text-white/90">
    @include('partiels.navbar')
    <main class="max-w-[1440px] mx-auto p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
        @yield('body')

    </main>

    @livewireScripts
</body>

</html>
