<div class="min-h-screen bg-gray-400 mb-4">
    <div class="max-w-7xl mx-auto p-8">
        <h1 class="font-serif text-4xl text-purple-950 mb-3">Adicionar Categoria</h1>
        <div class="flex justify-end mb-4">
            <button wire:click="voltar" class="p-4 py-2 bg-purple-950 text-white rounded-full">Voltar</button>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-gray-300">
            <form wire:submit.prevent="submit" class="flex flex-col">
                <div class="flex flex-col mb-4">
                    <label for="name">Nome</label>
                    <input wire:model.defer="name" id="name" type="text" placeholder="Digite o nome do cliente">
                    @error('name')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-4">
                    <button class="px-4 py-2 bg-purple-950 hover:bg-purple-950 rounded-full text-white"
                        type="submit">Cadastrar Categoria</button>
                </div>
            </form>
        </div>
    </div>
</div>
