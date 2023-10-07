<?php

namespace App\Livewire;

use Livewire\Component;

class CadastroAgendamento extends Component
{

    public function render()
    {
        return view('livewire.cadastro-agendamento')->layout('layouts.teste_agendamento');
    }
}
