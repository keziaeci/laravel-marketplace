<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Kios Genjreng</title>
        <wireui:scripts />
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
