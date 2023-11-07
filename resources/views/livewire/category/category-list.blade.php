<div class="min-h-screen bg-gray-400">
    <div class="max-w-7xl mx-auto p-5">
        <h1 class="font-serif text-4xl text-purple-950 mb-3">Formulário de Categorias</h1>
        <div class="flex justify-end mb-2">
            <button wire:click="adicionar" class="p-4 py-2 bg-purple-950 text-white rounded-full">Nova
                Categoria</button>
        </div>
        <div class="p-4 rounded-lg shadow-lg">
            <form class="flex flex-col">
                {{ $this->table }}
            </form>
        </div>
    </div>
</div>
