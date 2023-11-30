<div>
    <x-heroicon-s-x-circle @click="open= false" class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
    <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">
        Agregar categoría</h1>
    <form wire:submit="save">
        <label class="font-semibold">Nombre</label>
        <input wire:model="name" class="block border rounded-lg w-full py-1 px-3 mb-3" type="text">
        <x-button color="success" type="submit" class="float-right ">Agregar</x-button>
    </form>
</div>
