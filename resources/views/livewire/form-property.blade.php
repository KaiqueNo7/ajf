<div>
    <form wire:submit='{{ $formAction }}' class="w-full">
        <div class="grid grid-cols-3 grid-flow-row gap-4">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-white">Nome do imóvel</label>
                <input type="text" wire:model='name' id="name" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Nome do imóvel" required />
                @error('name') <span class="error">{{ $message }}</span> @enderror 
            </div>
        
            <div class="mb-5">
                <label for="status" class="block mb-2 text-sm font-medium text-white">Status</label>
                <input type="text" wire:model='status' id="status" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Status do imóvel (Lançamento, Conclusão de obras, etc...)" required />
                @error('status') <span class="error">{{ $message }}</span> @enderror 
            </div>

            <div class="mb-5">
                <label for="address" class="block mb-2 text-sm font-medium text-white">Endereço</label>
                <input type="text" wire:model='address' id="address" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Rua, Bairro - Cidade" required />
                @error('address') <span class="error">{{ $message }}</span> @enderror 
            </div>
        </div>
        <div class="grid grid-cols-3 grid-flow-row gap-4">
            <div class="mb-5">
                <label for="size" class="block mb-2 text-sm font-medium text-white">Metragem</label>
                <input type="text" wire:model='size' id="size" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="M²" required />
                @error('size') <span class="error">{{ $message }}</span> @enderror 
            </div>

            <div class="mb-5">
                <label for="bedrooms" class="block mb-2 text-sm font-medium text-white">Quartos</label>
                <input type="text" wire:model='bedrooms' id="bedrooms" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Quantidade de Quartos" required />
                @error('bedrooms') <span class="error">{{ $message }}</span> @enderror 
            </div>

            <div class="mb-5">
                <label for="bathrooms" class="block mb-2 text-sm font-medium text-white">Banheiros</label>
                <input type="text" wire:model='bathrooms' id="bathrooms" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Quantidade de Banheiros" required />
                @error('bathrooms') <span class="error">{{ $message }}</span> @enderror 
            </div>
        </div>
        <div class="grid grid-cols-2 grid-flow-row gap-4 mb-5">
            <div>
                <label for="project" class="block mb-2 text-sm font-medium text-white">Projeto</label>
                <textarea wire:model='project' placeholder="Escreve sobre o projeto do imóvel..." rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-700 rounded-lg border border-gray-800 focus:ring-blue-500 focus:border-blue-500"></textarea>  
            </div>
            <div>
                <label for="plant" class="block mb-2 text-sm font-medium text-white">Planta</label>
                <textarea wire:model='plant' placeholder="Escreve sobre a planta do imóvel..." rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-700 rounded-lg border border-gray-800 focus:ring-blue-500 focus:border-blue-500"></textarea>  
            </div>
        </div>
        <div class="w-full">
            <div class="mb-5">
                <label for="maps" class="block mb-2 text-sm font-medium text-white">Google Maps Link</label>
                <input type="text" wire:model='maps' id="maps" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Link do Google Maps do imóvel" required />
                @error('maps') <span class="error">{{ $message }}</span> @enderror 
            </div>
        </div>

        @php
            if($visibility){
                $checked = "checked";
            } 
        @endphp

        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition" type="submit">{{ $action }}</button>
    </form>

    @if($propertyId)
        @if($photo)
            <img src="{{ asset('storage/' . $photo) }}" alt="foto do imóvel" style="max-width: 100px;">
            <button wire:click='deletePhoto({{ $propertyId }})'>Deletar</button>
        @endif

        <form wire:submit="addPhoto({{ $propertyId }})" class="my-4">
            <input type="file" wire:model="sendPhoto">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition">Anexar foto</button>
        </form>

        <label class="inline-flex items-center mb-5 cursor-pointer">
            <input type="checkbox" wire:model='visibility' wire:change='changeVisibility({{ $propertyId }})' {{ $checked ?? '' }} class="sr-only peer">
            <div class="relative w-11 h-6 bg-gray-700 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-white">Visibilidade</span>
        </label>
    @endif
</div>