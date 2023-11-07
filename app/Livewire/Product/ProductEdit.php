<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductEdit extends Component
{
    public String $name = '';
    public int $price = 0;
    public int $stock = 0;
    public String $description = '';
    public $category_id;
    public $categories;

    public $rules = [
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|min:3',
        'price' => 'required',
        'stock' => 'required',
        'description' => 'required',
    ];

    public $messages = [
        'category_id.required' => 'O campo categoria é obrigatório.',
        'name.required' => 'O campo nome é obrigatório.',
        'name.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
        'price.required' => 'O campo preço é obrigatório.',
        'stock.required' => 'O campo estoque é obrigatório.',
        'description.required' => 'O campo descrição é obrigatório.',
    ];

    public function submit()
    {
        $this->validate([
            'category_id' => 'required|exists:categories,id', // Certifica-se de que a categoria selecionada existe no banco de dados.
            'name' => 'required|min:3',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);

        Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Produto criado com sucesso!');
        $this->reset();
        return redirect()->route('product.listar');
    }

    public function voltar()
    {
        return redirect()->route('product.listar');
    }
    public function mount($id)
    {
        $this->categories = \App\Models\Category::all();
        $product = Product::find($id);
        $this->category_id = $product->category_id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->stock = $product->stock;
        $this->description = $product->description;
    }
    public function render()
    {
        return view('livewire.product.product-edit')->layout('layouts.app');
    }
}