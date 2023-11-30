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
                    <x-button color="danger" wire:click="delete({{ $category->id }})" wire:loading.attr="disabled">
                        <x-heroicon-s-trash class="h-4 w-4 text-white" />
                    </x-button>
                    <x-button color="success" wire:loading.attr="disabled" wire:target="delete"
                        wire:click="$dispatchTo('categories.edit-form','openModal', { id: {{ $category->id }} })">
                        <x-heroicon-s-pencil-square class="h-4 w-4 text-white" />
                    </x-button>
                </div>
            </div>
        </div>
    @endforeach
</div>
