<div class="min-h-screen bg-gray-400 mb-4">
    <div class="max-w-7xl mx-auto p-8">
        <h1 class="font-serif text-4xl text-purple-950 mb-3">Adicionar Produto</h1>
        <div class="flex justify-end mb-4">
            <button wire:click="voltar" class="p-4 py-2 bg-purple-950 text-white rounded-full">Voltar</button>
        </div>

        <div class="p-4 rounded-lg shadow-lg bg-gray-300">
            <form wire:submit.prevent="submit" class="flex flex-col">
                <div class="flex flex-col mb-4">
                    <label for="category_id">Categoria</label>
                    <select wire:model.defer="category_id" id="category_id">
                        <option value="">Selecione uma categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="name">Nome</label>
                    <input wire:model.defer="name" id="name" type="text" placeholder="Digite o nome do cliente">
                    @error('name')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="price">Preço</label>
                    <input wire:model.defer="price" id="price" type="text" placeholder="Preço do produto">
                    @error('price')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="stock">Estoque</label>
                    <input wire:model.defer="stock" id="stock" type="text"
                        placeholder="Informe o estoque do produto">
                    @error('stock')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="description">Descrição</label>
                    <input wire:model.defer="description" id="description" type="text">
                    @error('description')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <button class="px-4 py-2 bg-purple-950 hover:bg-purple-950 rounded-full text-white"
                        type="submit">Cadastrar Produto</button>
                </div>
            </form>
        </div>
    </div>
</div>
