<div class="flex flex-col items-center justify-center">
    <h1 class="text-black text-5xl">Meu contador!</h1>
    <div class="flex items-center">
        <button wire:click="decrement" class="text-red-500 text-7xl">-</button>
        <span class="text-7xl mx-4">{{ $count }}</span>
        <button wire:click="increment" class="text-green-500 text-7xl">+</button>
    </div>
</div>
