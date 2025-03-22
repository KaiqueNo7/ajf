<section class="w-full p-4 flex justify-center items-start">
    <div class="w-1/3 px-6 xl:block lg:block md:block hidden">
        <div class="relative h-[35rem] border-4 border-orange-500">
            <img src="{{ $property->image_url }}" alt="" class="absolute w-full h-full left-0 top-0 object-cover z-0">
        </div>
    </div>
    <div class="xl:w-2/3 lg:w-2/3 md:w-2/3 w-full xl:px-6 lg:px-6 md:px-6">
        <div class="swiper relative border-4 border-orange-500 h-[28rem]" id="principal-slide">
            <div class="swiper-wrapper">
                @foreach ($photos as $photo)
                    <div class="swiper-slide">
                        <img src="{{ $photo->image_url }}" alt="" class="absolute w-full h-full left-0 top-0 object-contain z-0 bg-gray-800"> 
                    </div>
                @endforeach
            </div>
    
            <div class="swiper-pagination" id="swiper-pagination"></div>
    
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <div class="w-full flex justify-between items-center">
            <div class="w-1/2 hidden">
                <h1 class="text-4xl mt-4 text-orange-500 font-semibold">Projeto</h1>
                <p class="my-2">{{ $property->project }}</p>
            </div> 

            <div class="w-1/2">
                <h1 class="text-4xl mt-4 text-orange-500 font-semibold">Planta</h1>
                <p class="my-2">{{ $property->plant }}</p>
            </div> 

            <div class="w-1/2 flex justify-end items-start">
                <button type='button' class="border border-orange-500 font-bold text-md px-2 py-1 transition-all bg-orange-500 text-white }}">PROJETO</button>
                <button type='button' class="border border-orange-500 font-bold text-md px-2 py-1 transition-all text-orange-500 }}">PLANTA</button>
            </div>
        </div>

    </div>
</section>
<section class="flex justify-around items-center p-4 xl:flex-row lg:flex-row md:flex-row flex-col">
    <p class="w-1/3 text-center text-orange-500 font-semibold text-4xl">{{ $property->name }}</p>
    <div class="w-2/3 flex justify-around items-center lg:flex-row md:flex-row flex-col">
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