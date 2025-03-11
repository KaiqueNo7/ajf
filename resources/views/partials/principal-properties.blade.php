<section class="flex justify-center items-start w-full pl-12 py-10 flex-col">
    <h2 class="text-orange-500 text-5xl text-left w-full">Todos os imóveis</h2>
    <div class="swiper w-full my-4" id="card-properties">
      <div class="swiper-wrapper">
          @forelse ($properties as $property)
            <div class="swiper-slide min-h-128 rounded-xl group/item overflow-hidden">
              <img src="{{ asset('storage/' . $property->image) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0 rounded-xl group-hover/item:scale-110 transition-all">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent rounded-xl"></div>  
              <div class="absolute bottom-5 left-0 w-full z-20 p-4 flex justify-end items-start text-white flex-col rounded-xl">
                <h4 class="mb-2">{{ $property->name }}</h4>
                <p class="font-medium">{{ $property->size }} m²</p>
                <p class="font-medium mb-2">{{ $property->bedrooms }}</p>
                <x-button-link href="{{ $property->url }}">Saiba mais</x-button-link>
              </div>
            </div>
          @empty
          @for ($i = 0; $i <= 4; $i++)
            <div class="swiper-slide min-h-128 rounded-xl overflow-hidden">
              <img src="{{ asset('storage/img/img-example.png') }}" alt="" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="absolute bottom-5 left-0 w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                  <h4 class="mb-2">Nome do imóvel {{ $i }}</h4>
                  <p class=" font-medium">Metragem imóvel</p>
                  <p class=" font-medium">Qtd Quartos</p>
                  <a href="" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>
            </div>
          @endfor
      @endforelse
      </div>
      <div div class="swiper-button-prev text-orange-500" id="prev"></div>
      <div class="swiper-button-next text-orange-500" id="next"></div>
    </div>
</section>