<?php

namespace App\Livewire;

use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\CreateAction;
use Livewire\Component;
use App\Models\Customer;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Table;

class CustomerList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public ?Customer $customer = null;
    public function table(Table $table): Table
    {
        return $table
            ->query(Customer::query())
            ->columns([
                TextColumn::make('name')->label('Nome')->searchable(),
                TextColumn::make('email')->label('E-mail'),
                TextColumn::make('document')->label('Documento'),
                TextColumn::make('birthdate')->label('Data de Nascimento')->date('d/m/Y'),
                TextColumn::make('social_link')->label('Link Redes Sociais'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()
                ->action(fn (Customer $customer) => redirect()->route('clientes.editar', $customer))
                ->label('Editar')
                ->successNotificationTitle('Cliente editado com sucesso!'),
                DeleteAction::make()->action(fn (Customer $customer) => $customer->delete())->label('Excluir')->successNotificationTitle('Cliente excluído com sucesso!'),
            ])
            ->emptyStateActions([
				CreateAction::make(),
			]);
    }

    public function adicionar()
    {
        return redirect()->route('clientes.adicionar');
    }
    public function render()
    {
        return view('livewire.customer-list')->layout('layouts.app');
    }
}
