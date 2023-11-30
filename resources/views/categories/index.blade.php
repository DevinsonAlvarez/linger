<x-app-layout title="Categorias">

    <x-header title="Categories">
        <x-slot:content>
            <x-modal>
                <x-slot:button>
                    <x-button color="success" wire:click='openModal'>
                        <x-heroicon-s-plus class="h-4 w-4 inline" />
                        Agregar categoría
                    </x-button>
                </x-slot:button>
                <x-slot:content>
                    <livewire:categories.create-form />
                </x-slot:content>
            </x-modal>
        </x-slot:content>
    </x-header>

    {{-- <x-header title="Categorias">
        <x-slot:content>
            <div x-data="{ open: false }">
                <x-button color="success" @click="open=true"> <x-heroicon-s-plus class="h-4 w-4 inline" /> Agregar
                    categoria</x-button>
                <div class="h-[calc(100vh-64px)] w-full  top-0 left-0 bg-black/10 absolute flex justify-center items-center"
                    x-cloak x-show="open">
                    <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                        <x-heroicon-s-x-circle @click="open=false"
                            class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
                        <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">
                            Agregar categoría</h1>
                        <form action="{{ route('categories.create') }}" method="POST">
                            @csrf
                            <label class="font-semibold">Nombre</label>
                            <input name="name" class="block border rounded-lg w-full py-1 px-3 mb-3" type="text">
                            <button type="submit"
                                class="bg-green-600 float-right text-white px-2 py-2 rounded-lg">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot:content>
    </x-header> --}}

   
        {{-- <div class="h-[calc(100vh-64px)] w-full  top-0 left-0 bg-black/10 absolute flex justify-center items-center"
            x-cloak x-show="open">
            <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                <x-heroicon-s-x-circle @click=" open = false"
                    class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
                <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">Editar categoría</h1>
                <form  method="POST">
                    @csrf
                    @method('PATCH')
                    <label class="font-semibold">Nombre</label>
                    <input name="name" x-model="category.name" class="block border rounded-lg w-full py-1 px-3 mb-3"
                        type="text">
                    <button type="submit"
                        class="bg-[#60a5fa] float-right text-white px-2 py-2 rounded-lg">Actualizar</button>
                </form>
            </div>
        </div> --}}

        <livewire:categories.edit-form />

        <livewire:categories.list-categories />
</x-app-layout>
