<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="w-full bg-gray-800 text-white font-mono min-h-screen">
        <nav class="w-full bg-gray-900 h-16 py-2 flex items-center justify-center border-b border-gray-500/60 shadow">
            <a href="/"><h1 class="text-2xl font-bold">The All Tool</h1></a>
        </nav>

        <main class="px-4 mt-12">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
