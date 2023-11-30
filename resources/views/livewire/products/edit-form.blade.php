<div class="h-[calc(100vh-64px)] w-full z-50 top-0 left-0 bg-black/10 absolute flex justify-center items-center">
    <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
        <x-heroicon-s-x-circle wire: class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
        <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">
            Editar producto</h1>
        <form wire:submit="save">
            @csrf
            <div class="mb-3">
                <label class="font-semibold">Nombre del producto</label>
                <input wire:model="name" value="{{ $product->name }}" class="border rounded-md w-full py-1 px-2"
                    type="text">
            </div>
            <div class="mb-1">
                <label class="font-semibold">Descripción</label>
                <textarea wire:model="description" rows="3" class="border rounded-md w-full py-1 px-2 ">{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="font-semibold">Precio</label>
                <input wire:model="price" value="{{ $product->price }}" class="border rounded-md w-full py-1 px-2"
                    type="number">
            </div>
            <div class="mb-3">
                <label class="font-semibold">Cantidad</label>
                <input wire:model="stock" value="{{ $product->stock }}" class="border rounded-md w-full py-1 px-2 "
                    type="number">
            </div>
            <div class="mb-3">
                <label class="font-semibold">Categoria</label>
                <select wire:model="categoryId" value="{{ $product->categoryId }}"
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
