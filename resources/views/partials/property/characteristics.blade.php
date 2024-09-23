<section class="w-full p-4 flex justify-center items-start lg:flex-row md:flex-row flex-col">
    <div class="lg:w-1/2 md:w-1/2 w-full mb-4">
        <p class="text-2xl mb-4"><i class="fa-solid fa-location-dot text-orange-500"></i> {{ $property->address }}</p>
        <div id="mapa-container"></div>
    </div>
    <div class="lg:w-1/2 md:w-1/2 w-full px-4">
        <h1 class="text-2xl"><i class="fa-solid fa-circle-info text-orange-500"></i> Conheça <span class="text-orange-500">{{ $property->name }}</span></h1>
        <ul>
            @foreach ($additionalInformation as $information)
                <li class="my-4 text-gray-600 font-light"><i class="fa-solid fa-check"></i> {{ $information->text }}</li>
            @endforeach
        </ul>
    </div>
</section>