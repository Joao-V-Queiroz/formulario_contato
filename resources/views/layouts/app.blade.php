<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-slate-300">
        <div>
            <h1 class="text-purple-900 text-6xl">
                Vamos contar?
            </h1>
            <br>
            <livewire:contador />
        </div>
    </div>
</body>

</html>
