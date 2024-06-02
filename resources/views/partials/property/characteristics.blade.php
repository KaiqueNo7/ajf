<section class="w-full p-4 flex justify-center items-start lg:flex-row md:flex-row flex-col">
    <div class="lg:w-1/2 md:w-1/2 w-full mb-4">
        <p class=" text-xl mb-4"><i class="fa-solid fa-location-dot text-orange-500"></i> {{ $property->address }}</p>
        <div id="mapa-container pr-2"></div>
    </div>
    <div class="lg:w-1/2 md:w-1/2 w-full">
        <h1 class="font-semibold text-4xl text-orange-500">PRINCIPAIS CARACTERÍSTICAS <br>{{ $property->name }}</h1>
        <ul>
            @foreach ($additionalInformation as $information)
                <li class="my-4 text-gray-600 font-light"><i class="fa-solid fa-check"></i> {{ $information->text }}</li>
            @endforeach
        </ul>
    </div>
</section>