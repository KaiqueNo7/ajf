<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajfimóveis</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <header class="bg-black">
            <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('/storage/logo.png') }}" alt="Logo AJF Imóveis">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </header>
    </body>
</html>
