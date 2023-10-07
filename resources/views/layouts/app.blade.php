<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-notifications />
    <livewire:form />

    <wireui:scripts />

    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- <h1 class="text-purple-900 text-6xl">
                Vamos contar?
            </h1> --}}
    {{-- <livewire:contador /> --}}
</body>

</html>
