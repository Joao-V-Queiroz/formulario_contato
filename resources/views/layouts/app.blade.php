<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body>
    <x-notifications />
    {{-- {{ $slot }} --}}
    {{-- <livewire:form /> --}}
    <wireui:scripts />
    @filamentScripts
    @vite('resources/js/app.js')
    @livewire('customer-list')

    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- <h1 class="text-purple-900 text-6xl">
                Vamos contar?
            </h1> --}}
    {{-- <livewire:contador /> --}}
</body>

</html>
