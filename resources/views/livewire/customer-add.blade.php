<div class="min-h-screen bg-gray-400 mb-4">
    <div class="max-w-7xl mx-auto p-8">
        <h1 class="font-serif text-4xl text-purple-950 mb-3">Adicionar Customer</h1>
        <div class="flex justify-end mb-4">
            <button wire:click="editar" class="p-4 py-2 bg-orange-400 text-white rounded-full mr-2">Editar</button>
            <button wire:click="voltar" class="p-4 py-2 bg-purple-950 text-white rounded-full">Voltar</button>
            {{-- <button wire:click="excluir" class="p-4 py-2 bg-red-700 text-white rounded-full">Excluir</button> --}}
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-gray-300">
            <form wire:submit.prevent="submit" class="flex flex-col">
                <div class="flex flex-col mb-4">
                    <label for="name">Nome</label>
                    <input wire:model.defer="name" id="name" type="text" placeholder="Digite o nome do cliente">

                    {{-- validação de erro --}}
                    @error('name')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror

                </div>

                <div class="flex flex-col mb-4">
                    <label for="email">E-mail</label>
                    <input wire:model.defer="email" id="email" type="email" placeholder="example@example.com">
                    @error('email')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="document">Documento</label>
                    <input wire:model.defer="document" id="document" type="text"
                        placeholder="Informe o documento do cliente">
                    @error('document')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="birthdate">Data de Nascimento</label>
                    <input wire:model.defer="birthdate" id="birthdate" type="text"
                        placeholder="Informe a data de nascimento do cliente">
                    @error('birthdate')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mb-4">
                    <label for="social_link">Rede social</label>
                    <input wire:model.defer="social_link" id="social_link" type="text"
                        placeholder="Informe o link da rede social">
                    @error('social_link')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <button class="px-4 py-2 bg-purple-950 hover:bg-purple-950 rounded-full text-white"
                        type="submit">Cadastrar Cliente</button>
                </div>
            </form>
        </div>
    </div>
</div>
