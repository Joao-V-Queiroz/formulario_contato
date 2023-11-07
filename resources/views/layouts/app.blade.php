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
    {{-- Rotas para clientes --}}
    @if (Route::currentRouteName() === 'clientes.adicionar')
        @livewire('customer-add')
    @elseif(Route::currentRouteName() === 'clientes.listar')
        @livewire('customer-list')
    @elseif(Route::currentRouteName() === 'clientes.editar')
        @livewire('customer-edit', ['id' => Route::current()->parameter('id')])
    @endif
    {{-- Routes para categorias --}}
    @if (Route::currentRouteName() === 'category.adicionar')
        @livewire('category.category-add')
    @elseif(Route::currentRouteName() === 'category.listar')
        @livewire('category.category-list')
    @elseif(Route::currentRouteName() === 'category.editar')
        @livewire('category.category-edit', ['id' => Route::current()->parameter('id')])
    @endif

    {{-- Routes para produtos --}}
    @if (Route::currentRouteName() === 'product.adicionar')
        @livewire('product.product-add')
    @elseif(Route::currentRouteName() === 'product.listar')
        @livewire('product.product-list')
    @elseif(Route::currentRouteName() === 'product.editar')
        @livewire('product.product-edit', ['id' => Route::current()->parameter('id')])
    @endif

</body>

</html>
