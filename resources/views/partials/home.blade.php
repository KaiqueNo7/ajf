@if(!empty($properties->name))
    <div class="swiper w-full h-screen" id="principal-slide">
        <div class="swiper-wrapper">
            @foreach ($properties as $property)
                <div class="swiper-slide relative flex justify-start items-end px-5 py-10">
                    @if(!empty($property->mainPhoto->photo))
                        <img src="{{ asset('storage/' . $property->mainPhoto->photo) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
                    @endif
                    <div class="relative z-20">
                        <h1 class="text-white text-5xl font-light">{{ $property->name }}</h1>
                        <p class="text-white">{{ $property->project }}</p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-black to-transparent"></div>   
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination" id="swiper-pagination"></div>

        <div class="swiper-button-next" id="swiper-button-next"></div>
        <div class="swiper-button-prev" id="swiper-button-prev"></div>
    </div>
@else
<section class="w-full h-screen relative flex justify-start items-end px-5 py-10">
    <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
    <div class="relative z-20">
        <h1 class="text-white text-5xl font-light">AJF Imóveis</h1>
        <p class="text-white">Os principais lançamentos do Rio de Janeiro você encontra aqui.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-black to-transparent"></div>    4
</section>
@endif

