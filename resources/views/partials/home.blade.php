@if(!empty($properties[0]))
    <section class="w-full h-screen relative flex justify-start items-end px-12 py-10 pb-5">
        <div class="swiper w-full h-full" id="slide-home">
            <div class="swiper-wrapper h-full">
                @foreach ($properties as $property)
                <div class="swiper-slide">
                    <div class="relative h-full w-full rounded-2xl shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $property->image) }}" alt="" 
                            class="absolute w-full h-full left-0 top-0 object-cover z-0">
                        
                        <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-slate-900 to-transparent"></div>
                        
                        <div class="absolute bottom-10 left-10 z-20 text-white">
                            <h1 class="text-5xl font-light">{{ $property->name }}</h1>
                            <p class="mt-2 mb-6">{{ $property->project }}</p>
                            <x-button-link class="mt-2" href="{{ $property->url }}">Saiba mais</x-button-link>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination" id="swiper-pagination"></div>

            <div class="swiper-button-next" id="swiper-button-next"></div>
            <div class="swiper-button-prev" id="swiper-button-prev"></div>
        </div>
    </section>
@else
<section class="w-full h-screen relative flex justify-start items-end px-12 py-10 pb-5">
    <div class="swiper w-full" id="slide-home">
        <div class="swiper-wrapper">
            @for ($i = 0; $i <= 4; $i++)
                <div class="swiper-slide">
                    <div class="relative h-[31rem] w-full rounded-2xl shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/img/img-example.png') }}" alt="" 
                            class="absolute w-full h-full left-0 top-0 object-cover z-0">
                        
                        <div class="absolute bottom-0 left-0 w-full h-96 z-10 bg-gradient-to-t from-slate-900 to-transparent"></div>
                        
                        <div class="absolute bottom-10 left-10 z-20 text-white">
                            <h1 class="text-5xl font-light">AJF Imóveis</h1>
                            <p class="mt-2">Os principais lançamentos do Rio de Janeiro você encontra aqui.</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="swiper-pagination" id="swiper-pagination"></div>

        <div class="swiper-button-next" id="swiper-button-next"></div>
        <div class="swiper-button-prev" id="swiper-button-prev"></div>
    </div>
</section>
@endif
