<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AJF Imóveis | Os melhores imóveis do Rio de Janeiro</title>
        <meta name="description" content="Encontre as melhores oportunidades de imóvel, de forma simples, rápida e sem burocracia.">
        <link rel="icon" href="{{ asset('/storage/logo.ico') }}" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://kit.fontawesome.com/631534c44e.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased font-sans">
        <div class="w-full h-screen bg-orange-500 flex justify-center items-center text-white font-bold">
            {{ config('app.name') }}
            <br>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <br>
            <a href="{{ route('home') }}">Voltar para o início.</a>
        </div>
    </body>
</html>
