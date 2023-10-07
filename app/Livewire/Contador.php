<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public int $count = 0;

    public function increment():void
    {
       $this->count++;
    }

    public function decrement():void
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.contador')->layout('layouts.app');
    }
}
