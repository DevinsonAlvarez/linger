<div x-data="{ open: false }" x-init="() => {
    Livewire.on('closeModal', () => {
        open = false
    })
}">
    <div @click="open = !open">
        {!! $button ?? '' !!}
    </div>
    <div x-cloak x-show="open"
        class="h-[calc(100vh-64px)] w-full z-50 top-0 left-0 bg-black/10 absolute{{--  {{ $open ? 'flex' : 'hidden' }} --}} flex justify-center items-center">
        <div class="bg-white w-1/3 relative -top-20 p-4 m-auto rounded-md" @click.outside="open=false">
            {!! $content !!}
        </div>
    </div>
</div>
