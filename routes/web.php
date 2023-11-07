<?php

use App\Livewire\Category\CategoryAdd;
use App\Livewire\Category\CategoryEdit;
use App\Livewire\Category\CategoryList;
use App\Livewire\Product\ProductEdit;
use App\Livewire\Product\ProductList;
use App\Livewire\Product\ProductAdd;
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

//category routes
Route::get('/category', CategoryList::class)->name('category.listar');
Route::get('/category/add', CategoryAdd::class)->name('category.adicionar');
Route::get('/category/edit/{id}', CategoryEdit::class)->name('category.editar');

//products routes
Route::get('/product', ProductList::class)->name('product.listar');
Route::get('/product/add', ProductAdd::class)->name('product.adicionar');
Route::get('/product/edit/{id}', ProductEdit::class)->name('product.editar');


Route::get('/form',Form::class);

Route::get('/teste',TesteComponent::class);

Route::get('/cadastro-agendamento', CadastroAgendamento::class);