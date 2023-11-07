<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryEdit extends Component
{

    public $category;
    public String $name = '';

    public $rules = [
        'name' => 'required',
    ];

    public $messages = [
        'name.required' => 'O campo nome é obrigatório.',
    ];

    public function submit()
    {
        $this->validate();
        $this->category->name = $this->name;
        $this->category->save();
        session()->flash('message', 'Categoria editada com sucesso!');
        $this->name = '';
        return redirect()->route('category.listar');
    }

    public function voltar()
    {
        return redirect()->route('category.listar');
    }

    public function excluir(){
        $this->category->delete();
        session()->flash('message', 'Categoria excluída com sucesso!');
        return redirect()->route('category.listar');
    }

    public function mount($id)
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
    }
   public function render()
    {
        return view('livewire.category.category-edit')->layout('layouts.app');
    }
}