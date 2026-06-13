@extends('layouts.app')

@section('conteudo')
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">Bem-vindo ao Sistema de Biblioteca</h1>
        <p class="text-lg text-gray-600 mb-10">Gerencie seu acervo de livros de forma simples, rápida e organizada.</p>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">📚 Acervo Completo</h3>
                <p class="text-gray-600 mb-6">Consulte, cadastre, edite ou remova livros com poucos cliques.</p>
                <a href="{{ route('livros.index') }}"
                    class="inline-block bg-primary hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-medium transition">
                    Acessar Livros
                </a>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold mb-4">🔍 Controle Total</h3>
                <p class="text-gray-600 mb-6">Tenha sempre as informações atualizadas de quantidade e disponibilidade.</p>
                <span class="text-gray-500 italic">Mais funcionalidades em breve</span>
            </div>
        </div>
    </div>
@endsection