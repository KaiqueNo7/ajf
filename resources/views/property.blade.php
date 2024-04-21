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
        </style>
    </head>
    <body class="antialiased font-sans">
        @include('partials.header')

        <section class="w-full h-screen relative flex justify-start items-end px-5 py-10">
            <img src="{{ asset('storage/' . $property->image) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
            <div class="relative z-20">
                <h1 class="text-white text-5xl font-light">{{ $property->name }}</h1>
                <p class="text-white">{{ $property->project }}</p>
                <div class="flex justify-start items-center gap-4 mt-4">
                    <span class="text-white bg-orange-500 py-2 px-4 uppercase font-semibold rounded-xl">{{ $property->status }}</span>
                    <a href="#" class="text-white bg-orange-500 py-2 px-4 uppercase font-semibold rounded-xl">Fale com corretor</a>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-slate-900 to-transparent"></div>    4
        </section>

        <section class="w-full p-4 flex justify-center items-start">
            <div class="w-1/3 px-6">
                <div class="relative h-[35rem] border-4 border-orange-500">
                    <img src="{{ asset('storage/' . $property->image) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
                </div>
            </div>
            <div class="w-2/3 px-6">
                <div class="swiper relative border-4 border-orange-500 h-[28rem]" id="principal-slide">
                    <div class="swiper-wrapper">
                        @foreach ($photos as $photo)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $photo->photo) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0"> 
                            </div>
                        @endforeach
                    </div>
            
                    <div class="swiper-pagination" id="swiper-pagination"></div>
            
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <livewire:buttons-project :property="$property"/>
            </div>
        </section>

        <section class="flex justify-around items-center p-4">
            <p class="w-1/2 text-center text-orange-500 font-semibold text-4xl">{{ $property->name }}</p>
            <div class="w-1/2 flex justify-around items-center ">
                <div class="flex flex-col items-center justify-center text-orange-500">
                    <i class="fa-solid fa-bed text-4xl"></i>
                    <p class="font-bold text-2xl">{{ $property->bedrooms }}</p>
                </div>
                <div class="flex flex-col items-center justify-center text-orange-500">
                    <i class="fa-solid fa-bath text-4xl"></i>
                    <p class="font-bold text-2xl">{{ $property->bathrooms }}</p>
                </div>
                <div class="flex flex-col items-center justify-center text-orange-500">
                    <i class="fa-solid fa-vector-square text-4xl"></i>
                    <p class="font-bold text-2xl">{{ $property->size }} m²</p>
                </div>
            </div>
        </section>
        <section class="w-full px-4 py-6 mb-4 flex justify-around items-center bg-orange-500">
            <div class="w-1/2 text-center">
                <h2 class="text-white text-3xl font-bold">FALE COM O CORRETOR</h2>
                <h3 class="text-white text-2xl font-semibold">ONLINE SOBRE O IMÓVEL</h3>
            </div>
            <div class="w-1/2 flex justify-center items-center gap-4">
                <a href="#" class=" text-orange-500 bg-white py-2 px-4 rounded-xl font-semibold text-2xl">WHATSAPP <i class="fa-brands fa-whatsapp"></i></a>
                <a href="#" class=" text-orange-500 bg-white py-2 px-4 rounded-xl font-semibold text-2xl">TELEFONE <i class="fa-solid fa-phone"></i></a>
            </div>
        </section>

        <section class="w-full p-4 flex justify-center items-start">
            <div class="w-1/2">
                <p class=" text-xl mb-4"><i class="fa-solid fa-location-dot text-orange-500"></i> {{ $property->address }}</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470400.7386329951!2d-43.77565145864011!3d-22.913158000547277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio%20de%20Janeiro%2C%20RJ!5e0!3m2!1spt-BR!2sbr!4v1713635320909!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-1/2">
                <h1 class="font-semibold text-4xl text-orange-500">PRINCIPAIS CARACTERÍSTICAS <br>{{ $property->name }}</h1>
                <ul>
                    @foreach ($additionalInformation as $information)
                        <li class="my-4 text-gray-600 font-light"><i class="fa-solid fa-check"></i> {{ $information->text }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        @include('partials.contact-form')
    </body>
    @include('partials.footer')
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
    </script>
</html>
