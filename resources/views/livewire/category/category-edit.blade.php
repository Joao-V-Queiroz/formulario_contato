<div class="min-h-screen bg-gray-400 mb-4">
    <div class="max-w-7xl mx-auto p-8">
        <h1 class="font-serif text-4xl text-purple-950 mb-3">Editar Categoria</h1>
        <div class="flex justify-end mb-4">
            <button wire:click="voltar" class="p-4 py-2 bg-purple-950 text-white rounded-full mr-2">Voltar</button>
            <button wire:click="excluir" class="p-4 py-2 bg-red-700 text-white rounded-full">Excluir</button>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-gray-300">
            <form wire:submit.prevent="submit" class="flex flex-col">
                <div class="flex flex-col mb-4">
                    <label for="name">Nome</label>
                    <input wire:model.defer="name" id="name" type="text" placeholder="Digite o nome do cliente">
                    </input>
                </div>

                <div class="mb-4">
                    <button class="px-4 py-2 bg-purple-950 hover:bg-purple-950 rounded-full text-white"
                        type="submit">Editar Categoria</button>
                </div>
            </form>
        </div>
    </div>
</div>
