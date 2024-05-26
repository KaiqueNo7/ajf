<div>
    @foreach ($additionalInformations as $information)
    <div class="flex items-center bg-gray-700 py-2 rounded-lg p-4 my-4">
        <input type="text" id="input{{ $information->id }}" wire:change="updateInformation({{ $information->id }}, $event.target.value)" value="{{ $information->text }}" class="bg-gray-700 border focus:outline-none focus:ring-0 focus:border-transparent focus:border-gray-700 border-gray-700 text-white text-sm rounded-lg w-full pointer-events-none">
        <button type="button" onclick="toggleInformation('input{{ $information->id }}')" class="flex-shrink-0 text-sm py-1 px-2 ml-2 rounded">
            <i class="fa-solid fa-pen-to-square text-gray-500 hover:text-gray-400"></i>
        </button>
        <button type="button" wire:click='delete({{ $information->id }})' class="flex-shrink-0 text-sm py-1 px-2 ml-2 rounded">
            <i class="fa-solid fa-trash text-gray-500 hover:text-gray-400"></i>
        </button>
    </div>
    @endforeach

    <form wire:submit='createInformation({{$propertyId}})'>
        <div class="flex items-center bg-gray-700 py-2 rounded-lg p-4">
            <input type="text" wire:model='additionalInformation' class="focus:outline-none focus:ring-0 focus:border-transparent appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight" placeholder="Informações adicionais">
            <button type="submit" class="flex-shrink-0 text-sm text-white bg-gray-500 py-1 px-2 rounded">
              Adicionar
            </button>
          </div>
    </form>
</div>



