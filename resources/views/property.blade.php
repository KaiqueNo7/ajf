<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AJF Imóveis | {{ $property->name }}</title>
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

            .swiper-button-prev {
              color: #ea580c;
              transition: 0.2s;

            }
            .swiper-button-next {
              color: #ea580c;
              transition: 0.2s;
            }
            .swiper-button-prev:hover,
            .swiper-button-next:hover {
              color: #ffffff;
            }

            .swiper-pagination-bullet-active {
                background-color: #ea580c;
            }
        </style>
    </head>
    <body class="antialiased font-sans">
        @include('partials.header')
        
        @include('partials.property.home')

        @include('partials.property.about')
        
        @include('partials.property.contact-info')

        @include('partials.property.characteristics')

        @include('partials.footer')
    </body>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mySwiper = new Swiper('#principal-slide', {
                slidesPerView: 1,
                effect: "fade",
                loop: true,
                pagination: {
                    el: '#swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });

        function inserirMapa(endereco) {
            var enderecoEncoded = encodeURIComponent(endereco);

            var url = `https://www.google.com/maps?q=${enderecoEncoded}&output=embed`;

            var iframe = document.createElement('iframe');
            iframe.width = '100%';
            iframe.height = '400';
            iframe.style.border = '0';
            iframe.style.borderRadius  = '1em';
            iframe.src = url;
            iframe.allowFullscreen = true;


            var mapaContainer = document.getElementById('mapa-container');
            mapaContainer.innerHTML = '';
            mapaContainer.appendChild(iframe);
        }

        var endereco = '{{ $property->address }}';

        inserirMapa(endereco);
    </script>
</html>
