<div>
    <div x-data="{ search: '' }" class="relative">
        <input type="text" placeholder="Busqueda de productos..." @keyup.enter='$wire.set("search",search)'
            class="border-2 px-3 py-2 rounded-md mb-3 w-full" x-model="search">

        <button @click='$wire.set("search",search)'
            class="bg-gray-300 rounded-md h-11 w-11 py-[14px] px-4 absolute top-0 right-0">
            <span wire:loading.remove wire:target="search">
                <x-heroicon-s-magnifying-glass class="h-4 w-4" />
            </span>
            <span wire:loading wire:target="search">
                <x-heroicon-s-arrow-path class="h-4 w-4 animate-spin" />
            </span>
        </button>
    </div>

    <livewire:products.edit-form />

    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 bg-gray-200  ">
            <tr>
                <th scope="col" class="p-4">
                    <button wire:click="orderBy('id')" class="flex">
                        ID <x-heroicon-s-chevron-up-down class="w-4 h-4" />
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    <button wire:click="orderBy('name')" class="flex">
                        PRODUCTO <x-heroicon-s-chevron-up-down class="w-4 h-4" />
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    <button wire:click="orderBy('description')" class="flex">
                        DESCRIPCION <x-heroicon-s-chevron-up-down class="w-4 h-4" />
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    <button wire:click="orderBy('price')" class="flex"> PRECIO
                        <x-heroicon-s-chevron-up-down class="w-4 h-4" /></button>
                </th>
                <th scope="col" class="px-6 py-3">
                    <button wire:click="orderBy('stock')" class="flex"> CANTIDAD
                        <x-heroicon-s-chevron-up-down class="w-4 h-4" /></button>
                </th>
                <th scope="col" class="px-6 py-3">
                    <button wire:click="orderBy('category.name')" class="flex"> CATEGORIA
                        <x-heroicon-s-chevron-up-down class="w-4 h-4" /></button>
                </th>
                <th scope="col" class="px-6 py-3">
                    ACCIONES
                </th>
            </tr>
        </thead>
        <tbody>
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <tr wire:key="{{ $product->id }}" class="bg-white border-b  hover:bg-gray-50 ">
                        <td class="w-4 p-4 text-gray-800 font-semibold">
                            {{ $product->id }}
                        </td>
                        <th scope="row" class="px-6 py-2 font-medium text-black whitespace-nowrap">
                            {{ $product->name }}
                        </th>
                        <td class="px-6 py-2 max-w-[400px] text-gray-700">
                            {{ $product->description }}
                        </td>
                        <td class="px-6 py-2 text-gray-700">
                            ${{ $product->price }}
                        </td>
                        <td class="px-6 py-2 text-gray-700">
                            {{ $product->stock }}
                        </td>
                        <td class="px-6 py-2 text-gray-700">
                            {{ $product->category?->name }}
                        </td>
                        <td class="px-6 py-2 text-gray-700 ">
                            <div class="flex  items-center gap-1">
                                <x-button color="danger" wire:loading.attr="disabled" title="Eliminar"
                                    wire:click="delete({{ $product->id }})">
                                    <x-heroicon-s-trash class="h-4 w-4 text-white" />
                                </x-button>
                                <x-button color="primary"
                                    wire:click="$dispatchTo('products.edit-form','openModal', { id: {{ $product->id }} })"
                                    wire:loading.attr="disabled" wire:target="delete" title="Actualizar">
                                    <x-heroicon-s-pencil-square class="h-4 w-4 text-white" />
                                </x-button>
                                <x-button color="success" wire:loading.attr="disabled" title="Ver detalle">
                                    <x-heroicon-s-eye class="h-4 w-4 text-white" />
                                </x-button>

                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class=" p-6 ">
                        <h1 class="text-center">No se encontraron productos...</h1>
                    </td>
                </tr>
            @endif
        </tbody>


    </table>
    <div class="px-4 py-2">
        {!! $products->links('vendor.livewire.tailwind') !!}
    </div>
</div>
