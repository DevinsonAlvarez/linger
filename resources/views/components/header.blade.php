@props(['title'])

<div class="bg-white items-center px-6 py-3 justify-between rounded-lg flex mb-4 ">
    <h1 class="text-2xl font-semibold">{{ $title }}</h1>
    {{ $content ?? '' }}
</div>


{{-- <div x-data="{ open: false }">
    <x-button class="bg-success">Agregar categoria</x-button>
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
</div> --}}
