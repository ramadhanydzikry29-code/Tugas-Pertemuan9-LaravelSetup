<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel P9') — Tugas Rutin 9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen">
    <nav class="border-b border-slate-800">
        <div class="max-w-4xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="font-bold text-pink-500">⚡ Laravel P9</a>
            <div class="flex gap-5 text-sm">
                <a href="{{ route('home') }}" class="hover:text-pink-400">Home</a>
                <a href="{{ route('about') }}" class="hover:text-pink-400">About</a>
                <a href="{{ route('contact') }}" class="hover:text-pink-400">Contact</a>
                <a href="{{ route('hello', 'Laravel') }}" class="hover:text-pink-400">Hello</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-xs text-slate-500 py-8">
        Tugas Rutin 9 — Pemrograman Web · FMIPA UNIMED
    </footer>
</body>
</html>
