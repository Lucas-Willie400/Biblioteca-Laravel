<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#4f46e5',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-primary text-white shadow-lg">
            <div class="p-6 border-b border-blue-800">
                <h2 class="text-xl font-bold">📚 Biblioteca</h2>
            </div>
            <nav class="p-4 space-y-2">
                <a href="{{ url('/') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-700 transition">
                    <span>🏠</span> Início
                </a>
                <a href="{{ route('livros.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-700 transition">
                    <span>📖</span> Gerenciar Livros
                </a>
            </nav>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="flex-1 p-8">
            @yield('conteudo')
        </main>
    </div>
</body>

</html>