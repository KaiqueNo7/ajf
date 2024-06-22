<div>
    <form wire:submit='{{ $formAction }}' class="w-full">
        <div class="grid grid-cols-3 grid-flow-row gap-4">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-white">Nome do imóvel</label>
                <input type="text" wire:model='name' id="name" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Nome do imóvel"  />
                @error('name')<span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>
        
            <div class="mb-5">
                <label for="status" class="block mb-2 text-sm font-medium text-white">Status</label>
                <select class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full p-2" wire:model='status' id="status" >
                    <option value="">Selecione</option>
                    @foreach ($allStatus as $item)
                        <option value="{{ $item }}" @if($status == $item) selected @endif>{{ $item }}</option>
                    @endforeach
                </select>
             
                @error('status') <span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>

            <div class="mb-5">
                <label for="address" class="block mb-2 text-sm font-medium text-white">Endereço</label>
                <input type="text" wire:model='address' id="address" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Rua, Bairro, Estado"  />
                @error('address') <span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>
        </div>
        <div class="grid grid-cols-3 grid-flow-row gap-4">
            <div class="mb-5">
                <label for="size" class="block mb-2 text-sm font-medium text-white">Metragem</label>
                <input type="text" wire:model='size' id="size" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="M²"  />
                @error('size') <span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>

            <div class="mb-5">
                <label for="bedrooms" class="block mb-2 text-sm font-medium text-white">Quartos</label>
                <input type="text" wire:model='bedrooms' id="bedrooms" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Quantidade de Quartos"  />
                @error('bedrooms') <span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>

            <div class="mb-5">
                <label for="bathrooms" class="block mb-2 text-sm font-medium text-white">Banheiros</label>
                <input type="text" wire:model='bathrooms' id="bathrooms" class="bg-gray-700 border border-gray-800 text-white text-sm rounded-lg w-full" placeholder="Quantidade de Banheiros"  />
                @error('bathrooms') <span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>
        </div>
        <div class="grid grid-cols-2 grid-flow-row gap-4 mb-5">
            <div>
                <label for="project" class="block mb-2 text-sm font-medium text-white">Projeto</label>
                <textarea wire:model='project' placeholder="Escreve sobre o projeto do imóvel..." rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-700 rounded-lg border border-gray-800 focus:ring-blue-500 focus:border-blue-500"></textarea>  
                @error('project') <span class="error text-red-600">{{ $message }}</span> @enderror 
            </div>
            <div>
                <label for="plant" class="block mb-2 text-sm font-medium text-white">Planta</label>
                <textarea wire:model='plant' placeholder="Escreve sobre a planta do imóvel..." rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-700 rounded-lg border border-gray-800 focus:ring-blue-500 focus:border-blue-500"></textarea>  
                @error('plant') <span class="error text-red-600">{{ $message }}</span> @enderror 
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
                <button type="button" wire:click='deletePhoto({{ $propertyId }})' wire:confirm="Tem certeza?" class="absolute bottom-3 left-3"><i class="fa-solid fa-trash text-red-500 hover:text-red-400"></i></button>
            </div>
        @else
            <form wire:submit="addPhoto({{ $propertyId }})" class="my-4">
                <label for="file_input" class="block mb-2 text-sm font-medium text-white">Anexar capa</label>
                <label class="block">
                    <span class="sr-only">Escolha a capa</span>
                    <input id="file_input" type="file" wire:model="sendPhoto" accept="image/*" class="block w-full text-sm text-slate-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded file:border-0
                      file:text-sm file:font-semibold
                      file:bg-orange-50 file:text-orange-700
                      hover:file:bg-orange-100
                    "/>
                </label>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG ou JPG.</p>

                <div class="text-slate-500 my-2" wire:loading>Carregando...</div>
                @error('photo') <span class="error text-red-600">{{ $message }}</span> @enderror
                @if ($sendPhoto)
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition mt-2">Confirmar</button>
                @endif
            </form>

            
        @endif

        <label class="inline-flex items-center mb-5 cursor-pointer">
            <input type="checkbox" wire:model='visibility' wire:change='changeVisibility({{ $propertyId }})' {{ $checked ?? '' }} class="sr-only peer">
            <div class="relative w-11 h-6 bg-gray-700 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-white">Visibilidade</span>
        </label>
    @endif
</div>