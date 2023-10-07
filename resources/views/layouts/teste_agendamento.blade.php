<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/cadastro-agendamento.js') }}"></script>
    <title>Cadastro de Agendamento</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-notifications />

    {{ $slot }}

    <livewire:cadastro-agendamento>

    <livewire:scripts />

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
