<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 text-gray-900">

    {{-- Your header component --}}
    <x-ui.header />

    <main>
        {{-- This is where individual pages content will be injected --}}
        @yield('content')
    </main>

    {{-- Your footer component --}}
    <x-ui.footer />

</body>

</html>