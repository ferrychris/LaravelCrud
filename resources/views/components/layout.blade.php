<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="flex items-center justify-between px-6 py-4 bg-gray-900 text-white">
        <h1 class="text-xl font-bold tracking-tight">laravle reel</h1>
        <ul class="flex items-center gap-6">
            <li><a href="/about" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">about</a></li>
            <li><a href="/login" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">signin</a></li>
            <li><a href="/register" class="text-sm font-medium bg-white text-gray-900 px-4 py-2 rounded-md hover:bg-gray-100 transition-colors">signup</a></li>
        </ul>
    </nav>
    <header>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>

</html>