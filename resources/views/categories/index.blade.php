@extends('layouts.app')
@section('title', 'categories')
@section('content')

    <div x-data="{ open: false }">
        <button @click="open = !open">Expand</button>
        <span x-cloak x-show="open">
            hiden
        </span>
    </div>

    <div class="flex min-h-screen bg-gray-200 text-gray-800">
        <div class="p-4 w-full">
            <div class="bg-white items-center px-6 py-3 justify-between rounded-lg flex mb-4 relative">
                <h1 class="text-2xl font-semibold">Categorías</h1>
                <button class="bg-green-600 text-white px-2 py-2  rounded-lg">Agregar categoría</button>
            </div>
            <div class="grid grid-cols-12 gap-4">
                @foreach ($categories as $category)
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="flex flex-row justify-between items-center bg-white shadow-sm rounded p-4 ">
                            <div class="flex">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl  bg-blue-100 text-blue-500">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 6.00008V8.42008C22 10.0001 21 11.0001 19.42 11.0001H16V4.01008C16 2.90008 16.91 1.99008 18.02 2.00008C19.11 2.01008 20.11 2.45008 20.83 3.17008C21.55 3.90008 22 4.90008 22 6.00008Z"
                                            fill="#292D32" />
                                        <path opacity="0.4"
                                            d="M2 7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7H6C3 2 2 3.79 2 6V7Z"
                                            fill="#292D32" />
                                        <path
                                            d="M12 12.2598H9C8.59 12.2598 8.25 12.5998 8.25 13.0098C8.25 13.4198 8.59 13.7598 9 13.7598H12C12.41 13.7598 12.75 13.4198 12.75 13.0098C12.75 12.5998 12.41 12.2598 12 12.2598Z"
                                            fill="#292D32" />
                                        <path
                                            d="M9 9.75977H12C12.41 9.75977 12.75 9.41977 12.75 9.00977C12.75 8.59977 12.41 8.25977 12 8.25977H9C8.59 8.25977 8.25 8.59977 8.25 9.00977C8.25 9.41977 8.59 9.75977 9 9.75977Z"
                                            fill="#292D32" />
                                        <path
                                            d="M5.9707 8.00977C5.4107 8.00977 4.9707 8.45977 4.9707 9.00977C4.9707 9.55977 5.4207 10.0098 5.9707 10.0098C6.5207 10.0098 6.9707 9.55977 6.9707 9.00977C6.9707 8.45977 6.5207 8.00977 5.9707 8.00977Z"
                                            fill="#292D32" />
                                        <path
                                            d="M5.9707 12.0098C5.4107 12.0098 4.9707 12.4598 4.9707 13.0098C4.9707 13.5598 5.4207 14.0098 5.9707 14.0098C6.5207 14.0098 6.9707 13.5598 6.9707 13.0098C6.9707 12.4598 6.5207 12.0098 5.9707 12.0098Z"
                                            fill="#292D32" />
                                    </svg>
                                </div>
                                <div class="flex flex-col  ml-4 ">
                                    <div class="text-sm text-gray-500">{{ $category['name'] }}</div>
                                    {{-- <div class="font-bold text-lg">1259</div> --}}
                                    <div class="font-bold text-lg">10</div>
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
                                <button class="bg-blue-400 p-2 rounded-md">
                                    <x-heroicon-s-pencil-square class="h-4 w-4 text-white" />
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
