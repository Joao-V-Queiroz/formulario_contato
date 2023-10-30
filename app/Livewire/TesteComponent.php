<?php

namespace App\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;


class TesteComponent extends Component
{
    public function render()
    {
        return view('livewire.teste-component')->layout('layouts.teste');
    }
}