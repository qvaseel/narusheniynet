<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="mx-auto">
    <header class="bg-slate-300 p-5">
        <h1 class="text-4xl font-bold text-gray-800">Нарушений.нет</h1>
        <nav class="max-w-5xl mx-auto flex items-center gap-5">
            <a class="text-2xl active:font-semibold hover:font-semibold" href="{{ route('report.index') }}">Reports</a>
        </nav>
    </header>
    <main class="max-w-5xl mx-auto">
        @yield('content')
    </main>
    <footer class="bg-slate-300 flex items-center p-5">
        <p class="text-2xl mx-auto font-semibold">©Макаркина ВМ 2024</p>
    </footer>
</body>
</html>