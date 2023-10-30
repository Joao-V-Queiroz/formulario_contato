<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Form extends Component
{
    use Actions;
    use WithFileUploads;

    public string $name = '';

    public string $email = '';

    public string $message = '';

    public $file;

    protected array $rules = [
        'name' => ['required'],
        'email' => ['required','email'],
        'message' => ['required','min:10'],
    ];

    protected array $messages =[
       'name.required' => 'O campo nome é obrigatório!',
       'email.required' => 'O campo e-mail é obrigatório',
       'email.email' => 'E-mail inválido',
       'message.required' => 'O campo mensagem é obrigatório',
       'message.min' => 'O campo mensagem deve ter no mínimo 10 caracteres!'
    ];

    //validando e enviando dados
    public function submit(): void
    {
        $this->validate();
            $fileName = time() . '.' . $this->file->extension();
            $file = $this->file->storeAs('photos', $fileName, 'uploads');
            $fileUrl = config('app.url') . "/uploads/{$file}";
            dump("Arquivo salvo com sucesso!" . $file);
            dd("File Url: {$fileUrl}");
        // Resto do seu código
        $this->notification()->success('Parabéns', 'Contato enviado com sucesso!');
        $this->reset('name', 'email', 'message');

    }

    public function render()
    {
        return view('livewire.form')->layout('layouts.app');
    }
}