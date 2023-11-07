<?php

use App\Livewire\Contador;
use App\Livewire\CustomerAdd;
use App\Livewire\CustomerEdit;
use App\Livewire\Form;
use App\Livewire\TesteComponent;
use App\Livewire\CadastroAgendamento;
use App\Livewire\CustomerList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//clientes routes
Route::get('/clientes',CustomerList::class)->name('clientes.listar');
Route::get('/clientes/adicionar', CustomerAdd::class)->name('clientes.adicionar');
Route::get('/clientes/editar/{id}', CustomerEdit::class)->name('clientes.editar');

Route::get('/form',Form::class);

Route::get('/teste',TesteComponent::class);

Route::get('/cadastro-agendamento', CadastroAgendamento::class);
