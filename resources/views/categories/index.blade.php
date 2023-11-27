<x-app-layout title="Categorias">
    <x-header title="Categorias">
        <x-slot:content>
            <div x-data="{ open: false }">
                <x-button class="bg-success" @click=" open = true"> <x-heroicon-s-plus class="h-4 w-4 inline" /> Agregar
                    categoria</x-button>
                <div class="h-[calc(100vh-64px)] w-[calc(100vw-334px)]  top-0 left-0 bg-black/10 absolute flex justify-center items-center"
                    x-cloak x-show="open">
                    <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                        <x-heroicon-s-x-circle @click="open= false"
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
    </x-header>

    <div x-data="{ open: false, category: null }">
        <div class="h-[calc(100vh-64px)] w-[calc(100vw-334px)]  top-0 left-0 bg-black/10 absolute flex justify-center items-center"
            x-cloak x-show="open">
            <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                <x-heroicon-s-x-circle @click=" open = false"
                    class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
                <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">Editar categoría</h1>
                <form {{-- :action="route" --}} method="POST">
                    @csrf
                    @method('PATCH')
                    <label class="font-semibold">Nombre</label>
                    <input name="name" x-model="category.name" class="block border rounded-lg w-full py-1 px-3 mb-3"
                        type="text">
                    <button type="submit"
                        class="bg-[#60a5fa] float-right text-white px-2 py-2 rounded-lg">Actualizar</button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-4">
            @foreach ($categories as $category)
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row justify-between items-center bg-white shadow-sm rounded p-4 ">
                        <div class="flex">
                            <div
                                class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl  bg-blue-100 text-blue-500">
                                <x-heroicon-s-cube class="w-10 h-10" />
                            </div>
                            <div class="flex flex-col  ml-4 ">
                                <div class="text-sm font-bold">{{ $category->name }}</div>
                                <div class="text-lg">{{ $category->products_count }}</div>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <form method="POST" action="{{ route('categories.delete', $category->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-red-500 block p-2 rounded-md">
                                    <x-heroicon-s-trash class="h-4 w-4 text-white" />
                                </button>
                            </form>
                            <button class="bg-blue-400 p-2 rounded-md"
                                @click="open = true; category = {{ $category }}">
                                <x-heroicon-s-pencil-square class="h-4 w-4 text-white" />
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
