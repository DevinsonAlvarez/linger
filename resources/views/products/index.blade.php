<x-app-layout title="Productos">
    <x-header title="Productos">
        <x-slot:content>
            <div x-data="{ open: false }">
                <x-button class="bg-success" @click=" open = true"> <x-heroicon-s-plus class="h-4 w-4 inline" /> Agregar
                    producto</x-button>
                <div class="h-[calc(100vh-64px)] w-[calc(100vw-334px)] z-50 top-0 left-0 bg-black/10 absolute flex justify-center items-center"
                    x-cloak x-show="open">
                    <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md">
                        <x-heroicon-s-x-circle @click="open= false"
                            class="w-6 h-6 absolute right-2 top-2 cursor-pointer text-[#9a9b9e]" />
                        <h1 class="text-2xl text-center font-semibold border-b pb-2 mb-2 ">
                            Agregar producto</h1>
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

    <div class="bg-white items-center px-4 py-4 justify-between rounded-lg flex mb-4 ">

        <!-- This is an example component -->


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200  ">
                    <tr>
                        <th scope="col" class="p-4">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Producto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="bg-white border-b  hover:bg-gray-50 ">
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
                            <td class="px-6 py-2 flex gap-2 text-gray-700 text-right">
                                <button type="submit" class="bg-red-500 block p-2 rounded-md">
                                    <x-heroicon-s-trash class="h-4 w-4 text-white" />
                                </button>
                                <button class="bg-blue-400 p-2 rounded-md">
                                    <x-heroicon-s-pencil-square class="h-4 w-4 text-white" />
                                </button>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




    </div>

</x-app-layout>
