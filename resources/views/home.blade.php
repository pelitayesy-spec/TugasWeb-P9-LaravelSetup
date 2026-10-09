<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-600 to-purple-700 min-h-screen p-8">

    <div class="max-w-3xl mx-auto">

        <nav class="mb-6 flex justify-center gap-6 text-white font-medium">
            <a href="/" class="hover:underline">Home</a>
            <a href="/about" class="hover:underline">About</a>
            <a href="/contact" class="hover:underline">Contact</a>
            <a href="/welcome" class="hover:underline">Welcome</a>
        </nav>

        <h1 class="text-4xl font-bold text-white text-center mb-2">Daftar Mahasiswa</h1>
        <p class="text-indigo-100 text-center mb-6">Tugas Pertemuan 9 - Setup Laravel</p>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <table class="w-full">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="p-3 text-left">Nama</th>
                        <th class="p-3 text-left">NIM</th>
                        <th class="p-3 text-left">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $m)
                    <tr class="border-b hover:bg-indigo-50">
                        <td class="p-3 font-semibold">{{ $m['nama'] }}</td>
                        <td class="p-3">{{ $m['nim'] }}</td>
                        <td class="p-3">
                            <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                {{ $m['jurusan'] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>