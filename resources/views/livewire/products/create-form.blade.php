<div>
    <x-heroicon-s-x-circle @click="open= false" class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
    <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">
        Agregar producto</h1>
    <form wire:submit="save">
        @csrf
        <div class="mb-3">
            <label class="font-semibold">Nombre del producto</label>
            <input wire:model="name" class="border rounded-md w-full py-1 px-2" type="text">
        </div>
        <div class="mb-1">
            <label class="font-semibold">Descripción</label>
            <textarea wire:model="description" rows="3" class="border rounded-md w-full py-1 px-2 "></textarea>
        </div>
        <div class="mb-3">
            <label class="font-semibold">Precio</label>
            <input wire:model="price" class="border rounded-md w-full py-1 px-2" type="number">
        </div>
        <div class="mb-3">
            <label class="font-semibold">Cantidad</label>
            <input wire:model="stock" class="border rounded-md w-full py-1 px-2 " type="number">
        </div>
        <div class="mb-3">
            <label class="font-semibold">Categoria</label>
            <select wire:model="categoryId" class="border rounded-md w-full py-1 px-2 ">
                <option hidden selected>Selecciona una categoría</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="font-semibold">Imagenes</label>
            <input class="block border rounded-lg w-full py-1 px-1 " type="file">
        </div>
        <button type="submit" wire:loading.attr="disabled"
            class="bg-success float-right hover:bg-green-700 text-white disabled:bg-success-light px-2 py-2 rounded-lg">Agregar</button>
    </form>
</div>
