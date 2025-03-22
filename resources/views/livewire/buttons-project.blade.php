<div class="w-full flex justify-between items-center">
    <div class="w-1/2">
        <h1 class="text-4xl mt-4 text-orange-500 font-semibold">Projeto</h1>
        <p class="my-2">{{ $property->project }}</p>
    </div> 

    <div class="w-1/2">
        <h1 class="text-4xl mt-4 text-orange-500 font-semibold">Planta</h1>
        <p class="my-2">{{ $property->plant }}</p>
    </div> 

    <div class="w-1/2 flex justify-end items-start">
        <button type='button' class="border border-orange-500 font-bold text-md px-2 py-1 transition-all {{ $activeTab === 'projeto' ? 'bg-orange-500 text-white' : 'text-orange-500' }}">PROJETO</button>
        <button type='button' class="border border-orange-500 font-bold text-md px-2 py-1 transition-all {{ $activeTab === 'planta' ? 'bg-orange-500 text-white' : 'text-orange-500' }}">PLANTA</button>
    </div>
</div>
