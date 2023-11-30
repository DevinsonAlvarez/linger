<x-app-layout title="Productos">
    {{-- <div class="border border-black h-full">
        <div class="flex gap-3 my-3">
            <div class="h-20 w-20 bg-primary"></div>
            <div class="h-20 w-20 bg-primary-light"></div>
            <div class="h-20 w-20 bg-primary-dark"></div>
        </div>
        <div class="flex gap-3 my-3">
            <div class="h-20 w-20 bg-secondary"></div>
            <div class="h-20 w-20 bg-secondary-light"></div>
            <div class="h-20 w-20 bg-secondary-dark"></div>
        </div>
        <div class="flex gap-3 my-3">
            <div class="h-20 w-20 bg-success"></div>
            <div class="h-20 w-20 bg-success-light"></div>
            <div class="h-20 w-20 bg-success-dark"></div>
        </div>
        <div class="flex gap-3 my-3">
            <div class="h-20 w-20 bg-danger"></div>
            <div class="h-20 w-20 bg-danger-light"></div>
            <div class="h-20 w-20 bg-danger-dark"></div>
        </div>
        <div class="flex gap-3 my-3">
            <div class="h-20 w-20 bg-warning"></div>
            <div class="h-20 w-20 bg-warning-light"></div>
            <div class="h-20 w-20 bg-warning-dark"></div>
        </div>
        <div class="flex gap-3 my-3">
            <button class="h-20 w-20 bg-primary hover:bg-primary-dark active:bg-primary-light text-white">CLICK HERE</button>
        </div>
        <div class="flex gap-3 my-3">
            <button class="h-20 w-20 bg-secondary hover:bg-secondary-dark active:bg-secondary-light text-white">CLICK HERE</button>
        </div>
        <div class="flex gap-3 my-3">
            <button class="h-20 w-20 bg-success hover:bg-success-dark active:bg-success-light text-white">CLICK HERE</button>
        </div>
        <div class="flex gap-3 my-3">
            <button class="h-20 w-20 bg-danger hover:bg-danger-dark active:bg-danger-light text-white">CLICK HERE</button>
        </div>
        <div class="flex gap-3 my-3">
            <button class="h-20 w-20 bg-warning hover:bg-warning-dark active:bg-warning-light text-white">CLICK HERE</button>
        </div>
    </div> --}}

    <x-header title="Productos">
        <x-slot:content>
            <x-modal>
                <x-slot:button>
                    <x-button color="success" wire:click='openModal'>
                        <x-heroicon-s-plus class="h-4 w-4 inline" />
                        Agregar producto
                    </x-button>
                </x-slot:button>
                <x-slot:content>
                    <livewire:products.create-form />
                </x-slot:content>
            </x-modal>
        </x-slot:content>
    </x-header>
    <div class="bg-white items-center px-4 py-4 justify-between rounded-lg flex mb-4 ">
        <div class=" overflow-x-auto shadow-md sm:rounded-lg w-full">
            <livewire:products.data-table />
        </div>
    </div>
</x-app-layout>
