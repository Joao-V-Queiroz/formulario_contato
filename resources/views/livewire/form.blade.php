<div class="min-h-screen flex items-center justify-center bg-gray-400">
    <div class="p-8 bg-white w-1/2">
        <h1 class="text-xl mb-4">Formulário de Contato</h1>

        {{-- Comandos wire, fazem integração entre front e back-end com livewire
        Para evitar muitas requisições, usamos wire:model.defer, sem o último
        fariamos uma requisição por letra --}}

        {{-- Quando temos campo option, ou queremos que uma requisição seja enviada dps do tab
        trocamos o .defer por .lazy --}}

        <form wire:submit.prevent="submit" class="flex flex-col">
            <div class="flex flex-col mb-4">
                <label for="name">Informe o seu nome</label>
                <input wire:model.defer="name" id="name" type="text" placeholder="Digite seu nome">

                {{-- validação de erro --}}
                @error('name')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror

            </div>

            <div class="flex flex-col mb-4">
                <label for="email">Informe o seu email</label>
                <input wire:model.defer="email" id="email" type="email" placeholder="example@example.com">
                @error('email')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-4">
                <label for="message">Digite sua mensagem</label>
                <textarea wire:model.defer="message" id="message" placeholder="Sua Mensagem ..." cols="30" rows="10"></textarea>
                @error('message')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-4">
                <label for="file">Informe o seu arquivo de imagem</label>
                <input type="file" wire:model="file">
                @error('file')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button class="px-4 py-2 bg-green-500 hover:bg-green-500 rounded-full text-white" type="submit">Enviar
                    Contato</button>
            </div>
        </form>
    </div>
</div>
