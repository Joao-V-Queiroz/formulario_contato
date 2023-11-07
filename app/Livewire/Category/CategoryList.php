<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class CategoryList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public String $name = '';
    public function table(Table $table): Table
    {
        return $table
            ->query(Category::query())
            ->columns([
                TextColumn::make('name')->label('Nome')->searchable(),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()
                ->action(fn (Category $category) => redirect()->route('category.editar', $category))
                ->label('Editar')
                ->successNotificationTitle('Categoria editada com sucesso!'),
                DeleteAction::make()->action(fn (Category $category) => $category->delete())->label('Excluir')->successNotificationTitle('Cliente excluído com sucesso!'),
            ])
            ->emptyStateActions([
				CreateAction::make(),
			]);
    }

    public function adicionar()
    {
        return redirect()->route('category.adicionar');
    }
    public function render()
    {
        return view('livewire.category.category-list')->layout('layouts.app');
    }
}
