<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class ProductList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public String $name = '';
    public int $price = 0;
    public int $stock = 0;
    public String $description = '';


    public function table(Table $table): Table
    {
        return $table
            ->query(Product::query())
            ->columns([
                TextColumn::make('name')->label('Nome')->searchable(),
                TextColumn::make('price')->label('Preço')->searchable(),
                TextColumn::make('description')->label('Descrição')->searchable(),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()
                ->action(fn (Product $product) => redirect()->route('product.editar', $product))
                ->label('Editar')
                ->successNotificationTitle('Categoria editada com sucesso!'),
                DeleteAction::make()->action(fn (Product $product) => $product->delete())->label('Excluir')->successNotificationTitle('Produto excluído com sucesso!'),
            ])
            ->emptyStateActions([
				CreateAction::make(),
			]);
    }

    public function adicionar()
    {
        return redirect()->route('product.adicionar');
    }
    public function render()
    {
        return view('livewire.product.product-list')->layout('layouts.app');
    }
}