<div>
    <h2>Informações adicionais</h2>

    @foreach ($additionalInformations as $information)
        <input type="text" wire:change="updateInformation({{ $information->id }}, $event.target.value)" value="{{ $information->text }}">
        <button>Editar</button>
    @endforeach

    <form wire:submit='createInformation({{$propertyId}})' method="POST">
        <input type="text" wire:model='additionalInformation' name="additionalInformation">
        <button type="submit">Adicionar</button>
    </form>
</div>
