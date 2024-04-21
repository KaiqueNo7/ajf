<section class="flex justify-center items-start p-5 w-full px-5 py-10 flex-col">
    <h2 class="text-orange-500 text-5xl text-left w-full">Principais Lançamentos</h2>
    <div class="swiper w-full my-4" id="card-properties">
      <div class="swiper-wrapper">
          @forelse ($properties as $property)
            <div class="swiper-slide h-[28rem]">
              <img src="{{ asset('storage/' . $property->image) }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="relative h-full w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                <h4 class="mb-2">{{ $property->name }}</h4>
                <p class=" font-medium">{{ $property->size }}</p>
                <p class=" font-medium">{{ $property->bedrooms }}</p>
                <a href="/{{ normalizeString($property->name) }}/{{ $property->id }}" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>
            </div>
          @empty
            <div class="swiper-slide h-[28rem]">
              <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="relative h-full w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                  <h4 class="mb-2">Nome do imóvel</h4>
                  <p class=" font-medium">Metragem imóvel</p>
                  <p class=" font-medium">Qtd Quartos</p>
                  <a href="" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>
            </div>
            <div class="swiper-slide h-[28rem]">
              <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="relative h-full w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                  <h4 class="mb-2">Nome do imóvel</h4>
                  <p class=" font-medium">Metragem imóvel</p>
                  <p class=" font-medium">Qtd Quartos</p>
                  <a href="" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>
            </div>
            <div class="swiper-slide h-[28rem]">
              <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="relative h-full w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                  <h4 class="mb-2">Nome do imóvel</h4>
                  <p class=" font-medium">Metragem imóvel</p>
                  <p class=" font-medium">Qtd Quartos</p>
                  <a href="" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>
            </div>
            <div class="swiper-slide h-[28rem]">
              <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="relative h-full w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                  <h4 class="mb-2">Nome do imóvel</h4>
                  <p class=" font-medium">Metragem imóvel</p>
                  <p class=" font-medium">Qtd Quartos</p>
                  <a href="" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>
            </div>
            <div class="swiper-slide h-[28rem]">
              <img src="{{ asset('storage/img/rio-de-janeiro.jpg') }}" alt="Rio de Janeiro" class="absolute w-full h-full left-0 top-0 object-cover z-0">
              <div class="absolute bottom-0 left-0 w-full z-10 h-96 bg-gradient-to-t from-slate-900 to-transparent"></div>  
              <div class="relative h-full w-full z-20 p-4 flex justify-end items-start text-white flex-col">
                  <h4 class="mb-2">Nome do imóvel</h4>
                  <p class=" font-medium">Metragem imóvel</p>
                  <p class=" font-medium">Qtd Quartos</p>
                  <a href="" class="py-2 px-4 mt-2 bg-orange-500 rounded-xl">Saiba mais</a>
              </div>  
            </div>
      @endforelse
      </div>
      <div div class="swiper-button-prev text-orange-500" id="prev"></div>
      <div class="swiper-button-next text-orange-500" id="next"></div>
    </div>
</section>