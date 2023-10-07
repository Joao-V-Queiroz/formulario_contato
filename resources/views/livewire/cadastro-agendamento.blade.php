<div class="flex flex-col items-center h-screen">
    <h1 class="my-4 text-2xl font-bold">Cadastro de Agendamento</h1>

    <fieldset class="my-4">
        <legend class="text-lg">Dias da Semana</legend>
        <div class="flex items-center space-x-4">
            @foreach (['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'] as $dia)
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="diasSemana.{{ strtolower($dia) }}" class="mr-2">
                    {{ $dia }}
                </label>
            @endforeach
        </div>
    </fieldset>
    <div class="flex flex-wrap justify-center" id="div-container">
        @foreach (['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'] as $dia)
            <div class="p-4 mx-2 my-2 border border-gray-300 rounded-lg w-1/7" id="div-{{ strtolower($dia) }}">
                <h2 class="text-xl font-bold">{{ $dia }}</h2>
                <table class="w-full mb-4">
                    <!-- Tabela para os horários -->
                </table>
                <button class="btn btn-primary">Adicionar Horário</button>
            </div>
        @endforeach
    </div>
</div>
