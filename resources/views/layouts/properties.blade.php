<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center items-end flex-col">
            
            <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded transition" href="{{ route('new.property') }}"><i class="fa-solid fa-plus"></i> Adicionar novo</a>
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4 w-full">
                <div class="relative">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-white uppercase">
                            <tr>
                                <th></th>
                                <th scope="col" with="1%" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Nome do imóvel</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Endereço</th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($properties as $property)
                            <tr class="border-b text-white border-gray-400">
                                <td class="px-6 py-4">
                                    <a href="edit/{{ $property->id }}"><i class="fa-solid fa-pen-to-square text-gray-500 hover:text-gray-400"></i></a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->status }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $property->address }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4">Nenhum imóvel encontrado.</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
