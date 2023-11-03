<?php

use App\Livewire\Contador;
use App\Livewire\Form;
use App\Livewire\TesteComponent;
use App\Livewire\CadastroAgendamento;
use App\Livewire\CustomerList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes',CustomerList::class);

Route::get('/form',Form::class);

Route::get('/teste',TesteComponent::class);

Route::get('/cadastro-agendamento', CadastroAgendamento::class);