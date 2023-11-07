<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body>
    @if (Route::currentRouteName() === 'clientes.adicionar')
        @livewire('customer-add')
    @elseif(Route::currentRouteName() === 'clientes.listar')
        @livewire('customer-list')
    @elseif(Route::currentRouteName() === 'clientes.editar')
        @livewire('customer-edit', ['id' => Route::current()->parameter('id')])
    @endif
</body>

</html>
