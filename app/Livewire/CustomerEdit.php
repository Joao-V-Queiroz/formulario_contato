<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Carbon;

class CustomerEdit extends Component
{
    public $customer;
     public String $name = '';
     public String $email = '';
     public String $document = '';
     public ?String $birthdate = '';
     public ?String $social_link = '';

     public array $rules = [
        'name' => ['required'],
        'email' => ['required', 'email'],
        'document' => ['required', 'min:11'],
        'birthdate' => ['nullable'],
        'social_link' => ['nullable', 'url'],
    ];

    protected array $messages = [
        'name.required' => 'O campo nome é obrigatório!',
        'email.required' => 'O campo e-mail é obrigatório',
        'email.email' => 'E-mail inválido',
        'document.required' => 'O campo documento é obrigatório',
        'document.min' => 'O campo documento deve ter no mínimo 11 caracteres',
        'birthdate.required' => 'O campo data de nascimento é obrigatório',
        'social_link.required' => 'O campo link social é obrigatório',
        'social_link.url' => 'Link social inválido',
    ];

    public function submit()
    {
        $this->validate();
        $birthdate = $this->getBirthDate();
        Customer::updateOrCreate(
         [
            'email' => $this->email,
         ],[
            'name' => $this->name,
            'email' => $this->email,
            'document' => $this->document,
            'birthdate' => $birthdate, // Use a instância do Carbon aqui
            'social_link' => $this->social_link
        ]);
        $this->reset();
        return redirect()->route('clientes.listar');
    }
    private function getBirthDate(): ?Carbon
    {
        if(is_null($this->birthdate)){
            return null;
        }
         return Carbon::createFromFormat('d/m/Y', $this->birthdate);
    }

    private function getBrazilianBirthDate(): ?Carbon
    {
        if (filled($this->customer->birthdate)) {
            return Carbon::createFromFormat('Y-m-d', $this->customer->birthdate);
        }
        return null;
    }

    public function voltar()
    {
        return redirect()->route('clientes.listar');
    }

    public function excluir()
    {
        $this->customer->delete();
        return redirect()->route('clientes.listar');
    }

    public function mount($id): void
    {
        $this->customer = Customer::find($id);
        $brazilianBirthDate = $this->getBrazilianBirthDate()?->format('d/m/Y');
        $this->name = $this->customer->name;
        $this->email = $this->customer->email;
        $this->document = $this->customer->document;
        $this->birthdate = $brazilianBirthDate;
        $this->social_link = $this->customer->social_link;
    }
    public function render()
    {
        return view('livewire.customer-edit')->extends('layouts.app');
    }
}
