<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">{{ $property->name ?? "Novo imóvel"; }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:form-property :propertyId="$property->id ?? ''">
        </div>
    </div>

    @if($property)
        <livewire:form-additional-information :propertyId="$property->id ?? ''">
        <livewire:form-photos :propertyId="$property->id ?? ''">
    @endif
</x-app-layout>
