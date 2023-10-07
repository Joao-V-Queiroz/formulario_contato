<!-- resources/views/livewire/time-slot-manager.blade.php -->

<div>
    @foreach (['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'] as $day)
        <div class="w-1/7 p-4 border border-gray-300 rounded-lg mx-2 my-2" id="div-{{ strtolower($day) }}">
            <h2 class="text-xl font-bold">{{ $day }}</h2>
            <table class="w-full mb-4">
                <!-- Tabela para os horários -->
            </table>
            <button class="btn btn-primary" wire:click="addTimeSlot('{{ strtolower($day) }}')">Adicionar Horário</button>
        </div>
    @endforeach
</div>
