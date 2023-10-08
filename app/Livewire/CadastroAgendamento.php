<?php

namespace App\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class CadastroAgendamento extends Component
{
    use Actions;

    public array $rules = [

    ];

    protected array $messages = [

    ];

    public function submit():void
    {
      $this->validade();

      //enviar um e-mail

      //guardar no banco de dados

      $this->notification()->success('Cadastro realizado com sucesso!','Agenda marcada');
      $this->reset('');
    }

    public function render()
    {
        return view('livewire.cadastro-agendamento')->layout('layouts.teste_agendamento');
    }
}
