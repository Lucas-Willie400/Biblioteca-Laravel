@extends('layouts.app')

@section('titulo-pagina')
@section('subtitulo-pagina')

@section('conteudo')
    <!-- Seção Principal com Imagem -->
    <div class="relative h-[50vh] rounded-3xl overflow-hidden mb-12 shadow-card">
        <div class="absolute inset-0 bg-library-pattern bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-gradient-to- from-primary/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-10 text-white max-w-2xl">
            <h2 class="text-4xl font-bold mb-3 text-shadow">Conhecimento ao seu alcance</h2>
            <p class="text-lg text-slate-100">Organize, consulte e gerencie todos os livros da sua biblioteca em um só
                lugar, com uma experiência moderna e intuitiva.</p>
        </div>
    </div>

    <!-- Cards de Acesso Rápido -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <div class="bg-white rounded-2xl shadow-card p-8 hover:translate-y[-8px] transition-custom group">
            <div
                class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-custom">
                <i class="fa-solid fa-book"></i>
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">Acervo de Livros</h3>
            <p class="text-slate-600 mb-6">Cadastre, edite, remova e consulte todos os livros disponíveis, com dados
                completos e organizados.</p>
            <a href="{{ route('livros.index') }}"
                class="inline-flex items-center text-accent font-medium hover:gap-2 transition-custom">
                Acessar <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-card p-8 hover:translate-y[-8px] transition-custom group">
            <div
                class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-green-600 group-hover:text-white transition-custom">
                <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">Empréstimos</h3>
            <p class="text-slate-600 mb-6">Controle quem está com qual livro, datas de devolução e histórico de movimentação
                do acervo.</p>
            <span class="inline-block text-slate-400 text-sm">Em breve</span>
        </div>

        <div class="bg-white rounded-2xl shadow-card p-8 hover:translate-y[-8px] transition-custom group">
            <div
                class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-purple-600 group-hover:text-white transition-custom">
                <i class="fa-solid fa-chart-pie"></i>
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">Relatórios</h3>
            <p class="text-slate-600 mb-6">Visualize estatísticas, livros mais emprestados, acervo por gênero e muito mais.
            </p>
            <span class="inline-block text-slate-400 text-sm">Em breve</span>
        </div>
    </div>

    <!-- Destaque -->
    <div class="bg-white rounded-2xl shadow-card p-8 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/3">
            <img src="https://images.unsplash.com/photo-1497633762265-9d1e0e0aa060?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                alt="Livros empilhados" class="rounded-xl shadow-lg w-full h-auto object-cover">
        </div>
        <div class="md:w-2/3">
            <h3 class="text-2xl font-bold text-primary mb-4">Organização e praticidade para sua biblioteca</h3>
            <p class="text-slate-600 mb-4">Nosso sistema foi desenvolvido para facilitar o dia a dia de bibliotecários e
                usuários, com uma interface limpa, moderna e fácil de usar.</p>
            <ul class="space-y-2 text-slate-600">
                <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i> Cadastro completo de
                    obras</li>
                <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i> Controle de quantidade
                    e disponibilidade</li>
                <li class="flex items-center gap-2"><i class="fa-solid fa-check text-green-500"></i> Busca rápida e filtros
                    inteligentes</li>
            </ul>
        </div>
    </div>
@endsection