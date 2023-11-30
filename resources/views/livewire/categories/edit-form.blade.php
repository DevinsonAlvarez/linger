<div>
    @if ($open)
        <div class="h-[calc(100vh-64px)] w-full  top-0 left-0 bg-black/10 absolute flex justify-center items-center">
            <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                <x-heroicon-s-x-circle wire:click="closeModal"
                    class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
                <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">Editar categoría</h1>
                <form wire:submit="update">
                    <label class="font-semibold">Nombre</label>
                    <input wire:model="category.name" class="block border rounded-lg w-full py-1 px-3 mb-3" type="text">
                    <x-button type="submit" color="primary" class="float-right ">Actualizar</x-button>
                </form>
            </div>
        </div>
    @endif
</div>
