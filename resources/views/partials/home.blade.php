<section class="w-full h-screen relative flex justify-start items-end px-5 py-10">
    @forelse ($properties as $property)
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    @empty
        <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
        <div class="relative z-20">
            <h1 class="text-white text-5xl font-light">AJF Imóveis</h1>
            <p class="text-white">Os principais lançamentos do Rio de Janeiro você encontra aqui.</p>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-black to-transparent"></div>    
    @endforelse
</section>