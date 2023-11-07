<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use WireUi\Traits\Actions;
use Illuminate\Support\Carbon;
class CustomerAdd extends Component
{
    use Actions;
    public String $name = '';
    public String $email = '';
    public String $document = '';
    public String $birthdate = '';
    public string $social_link = '';

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
        Customer::create([
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

    public function voltar()
    {
        return redirect()->route('clientes.listar');
    }
    public function render()
    {
        return view('livewire.customer-add')->layout('layouts.app');
    }
}