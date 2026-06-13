<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca | Acervo Completo</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F172A',
                        secondary: '#1E293B',
                        accent: '#F59E0B',
                        light: '#F8FAFC',
                        card: '#FFFFFF',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'card': '0 10px 30px rgba(0, 0, 0, 0.08)',
                        'sidebar': '4px 0 15px rgba(0, 0, 0, 0.05)',
                    },
                    backgroundImage: {
                        'library-pattern': "url('https://images.unsplash.com/photo-1524578271613-d550eacf6090?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80')",
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .transition-custom {
                @apply transition-all duration-300 ease-in-out;
            }
        }
    </style>
</head>

<body class="bg-gradient-to- from-blue-50 to-indigo-50 min-h-screen font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar Moderna -->
        <aside class="w-72 bg-primary text-white shadow-sidebar fixed h-full z-10">
            <!-- Cabeçalho da Sidebar -->
            <div class="p-6 border-b border-slate-700 flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center text-white text-xl">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-shadow">Biblioteca</h2>
                    <p class="text-xs text-slate-300">Acervo Digital</p>
                </div>
            </div>

            <!-- Navegação -->
            <nav class="p-4 mt-2">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary hover:translate-x-1 transition-custom">
                            <i class="fa-solid fa-house w-5 text-center"></i>
                            <span>Início</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('livros.index') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary hover:translate-x-1 transition-custom">
                            <i class="fa-solid fa-book w-5 text-center"></i>
                            <span>Gerenciar Livros</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary hover:translate-x-1 transition-custom opacity-70">
                            <i class="fa-solid fa-user-check w-5 text-center"></i>
                            <span>Empréstimos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-secondary hover:translate-x-1 transition-custom opacity-70">
                            <i class="fa-solid fa-users w-5 text-center"></i>
                            <span>Leitores</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Rodapé da Sidebar -->
            <div class="absolute bottom-4 left-0 right-0 px-4">
                <div class="bg-secondary/50 rounded-lg p-3 text-center text-xs text-slate-300">
                    Sistema de Biblioteca © 2026
                </div>
            </div>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="flex-1 ml-72 p-8">
            <!-- Barra Superior -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-[clamp(1.8rem,3vw,2.8rem)] font-bold text-primary text-shadow">
                        @yield('titulo-pagina')</h1>
                    <p class="text-slate-500">@yield('subtitulo-pagina')</p>
                </div>
                <div class="bg-white rounded-full p-3 shadow-card">
                    <i class="fa-solid fa-user-circle text-2xl text-primary"></i>
                </div>
            </div>

            <!-- Conteúdo da Página -->
            <div class="animate-fadeIn">
                @yield('conteudo')
            </div>
        </main>
    </div>
</body>

</html>