<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use WireUi\Traits\Actions;
class CustomerAdd extends Component
{
    use Actions;
    public String $name = '';
    public String $email = '';
    public String $document = '';
    public String $birth_date = '';
    public string $socialLink = '';

    public array $rules = [
        'name' => ['required'],
        'email' => ['required', 'email'],
        'document' => ['required', 'min:11'],
        'birth_date' => ['nullable'],
        'socialLink' => ['nullable'],
    ];

    protected array $messages = [
        'name.required' => 'O campo nome é obrigatório!',
        'email.required' => 'O campo e-mail é obrigatório',
        'email.email' => 'E-mail inválido',
        'document.required' => 'O campo documento é obrigatório',
    ];
    public function submit()
    {
       $this->validate();
           Customer::create([
               'name' => $this->name,
               'email' => $this->email,
               'document' => $this->document,
               'birth_date' => $this->birth_date = date('d/m/Y', strtotime($this->birth_date)),
               'socialLink' => $this->socialLink
            ]);
            $this->reset('name', 'email', 'document', 'birth_date', 'socialLink');
            return redirect()->route('clientes.listar');
    }
    public function voltar()
    {
        return redirect()->route('clientes.listar');
    }

    public function excluir($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        session()->flash('message', 'Cliente excluído com sucesso!');
        return redirect()->route('clientes.listar');
    }

    public function editar($id)
    {
        $customer = Customer::find($id);
        return redirect()->route('clientes.editar', ['customer' => $customer]);
    }

    public function render()
    {
        return view('livewire.customer-add')->layout('layouts.app');
    }
}
