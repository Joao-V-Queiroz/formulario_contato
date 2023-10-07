<?php

use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contador',Contador::class);
