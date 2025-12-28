<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 text-gray-900">

    <x-ui.header />
    <x-ui.carousel />
    <x-ui.overview />
    <x-ui.upcoming-event />
    <x-ui.cta />
    <x-ui.footer />

    <script>
        const carousel = document.getElementById('carousel');
        let index = 0;

        setInterval(() => {
            index = (index + 1) % 3;
            carousel.style.transform = `translateX(-${index * 100}%)`;
        }, 3000);
    </script>

</body>

</html>