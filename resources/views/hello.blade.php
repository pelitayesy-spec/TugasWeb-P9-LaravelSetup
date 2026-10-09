<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-600 to-purple-700 min-h-screen p-8">
    <div class="max-w-xl mx-auto bg-white rounded-2xl shadow-xl p-8 text-center">
        <h1 class="text-3xl font-bold mb-4">Halo, {{ $nama }}! 👋</h1>
        <p class="text-gray-600 mb-6">Nama ini diambil dari URL: /hello/{{ $nama }}</p>
        <a href="/" class="text-indigo-600 hover:underline">← Kembali</a>
    </div>
</body>
</html>