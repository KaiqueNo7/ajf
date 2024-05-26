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
                <input type="text" wire:model='address' id="address" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Rua, Bairro, Estado" required />
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

        @php
            if($visibility){
                $checked = "checked";
            } 
        @endphp

        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition" type="submit">{{ $action }}</button>
    </form>

    @if($propertyId)
        @if($photo)
        <div class="relative w-full h-48 my-4">
            <img src="{{ asset('storage/' . $photo) }}" alt="foto do imóvel" class="absolute w-full h-full left-0 top-0 object-contain z-0 bg-gray-800">
            <button type="button" wire:click='deletePhoto({{ $propertyId }})' class="absolute bottom-3 left-3"><i class="fa-solid fa-trash text-red-500 hover:text-red-400"></i></button>
        </div>
        @endif

        <div x-data>
            <form x-ref="form" enctype="multipart/form-data" class="my-4">
                <label class="block mb-2 text-sm font-medium text-white" for="file_input">Anexar capa</label>
                <input 
                    x-on:change="$wire.upload('sendPhoto', $event.target.files[0])" 
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" 
                    id="file_input" 
                    type="file" 
                    accept="image/*">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG ou GIF (MAX. 800x400px).</p>
                @error('sendPhoto') <span class="error">{{ $message }}</span> @enderror
            </form>
        </div>

        <label class="inline-flex items-center mb-5 cursor-pointer">
            <input type="checkbox" wire:model='visibility' wire:change='changeVisibility({{ $propertyId }})' {{ $checked ?? '' }} class="sr-only peer">
            <div class="relative w-11 h-6 bg-gray-700 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-white">Visibilidade</span>
        </label>
    @endif
</div>