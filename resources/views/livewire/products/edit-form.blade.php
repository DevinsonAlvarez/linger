<div>
    @if ($open)
        <div class="h-[calc(100vh-64px)] w-full z-50 top-0 left-0 bg-black/10 absolute flex justify-center items-center">
            <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                <x-heroicon-s-x-circle wire:click="closeModal"
                    class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
                <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">
                    Editar producto</h1>
                <form wire:submit="update">
                    {{-- @csrf --}}
                    <div class="mb-3">
                        <label class="font-semibold">Nombre del producto</label>
                        <input wire:model="product.name" class="border rounded-md w-full py-1 px-2" type="text">
                    </div>
                    <div class="mb-1">
                        <label class="font-semibold">Descripción</label>
                        <textarea wire:model="product.description" rows="3" class="border rounded-md w-full py-1 px-2 ">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="font-semibold">Precio</label>
                        <input wire:model="product.price" value="{{ $product->price }}"
                            class="border rounded-md w-full py-1 px-2" type="number">
                    </div>
                    <div class="mb-3">
                        <label class="font-semibold">Cantidad</label>
                        <input wire:model="product.stock" value="{{ $product->stock }}"
                            class="border rounded-md w-full py-1 px-2 " type="number">
                    </div>
                    <div class="mb-3">
                        <label class="font-semibold">Categoría</label>
                        <select wire:model="product.category_id" value="{{ $product->categoryId }}"
                            class="border rounded-md w-full py-1 px-2 ">
                            <option selected hidden>{{ $product->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="font-semibold">Imagenes</label>
                        <input class="block border rounded-lg w-full py-1 px-1 " type="file">
                    </div>
                    <x-button type="submit" color="primary" wire:loading.attr="disabled"
                        class="float-right">Actualizar</x-button>
                </form>

            </div>
        </div>
    @endif
</div>
