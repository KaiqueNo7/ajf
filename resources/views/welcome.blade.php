<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajfimóveis</title>
        <link rel="icon" href="{{ asset('/storage/logo.ico') }}" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <header class="fixed top-0 left-0 w-full flex justify-between z-50 py-2 px-7 border-b-white bg-zinc-700">
            <img class="size-10" src="{{ asset('/storage/logo.png') }}" alt="Logo AJF Imóveis">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </header>
        
    </body>
</html>
