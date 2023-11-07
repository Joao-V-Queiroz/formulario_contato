<?php
declare(strict_types=1);
namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryAdd extends Component
{
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
        $category = new Category();
        $category->name = $this->name;
        $category->save();
        session()->flash('message', 'Categoria criada com sucesso!');
        $this->name = '';
        return redirect()->route('category.listar');
    }

    public function voltar()
    {
        return redirect()->route('category.listar');
    }
    public function render()
    {
        return view('livewire.category.category-add')->layout('layouts.app');
    }
}