<x-app-layout title="Usuarios">
    <x-header title="Usuarios">
    </x-header>
    <div class="bg-white items-center px-4 py-4 justify-between rounded-lg flex mb-4 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200  ">
                    <tr>
                        <th scope="col" class="p-4">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombres
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Teléfono
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dirección
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                            <td class="w-4 p-4 text-gray-800 font-semibold">
                                {{ $user->id }}
                            </td>
                            <th scope="row" class="px-6 py-2 font-medium text-black whitespace-nowrap">
                                {{ $user->names . ' ' . $user->last_names }}
                            </th>
                            <td class="px-6 py-2 max-w-[400px] text-gray-700">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-2 text-gray-700">
                                ${{ $user->phone }}
                            </td>
                            <td class="px-6 py-2 text-gray-700">
                                {{ $user->address }}
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
