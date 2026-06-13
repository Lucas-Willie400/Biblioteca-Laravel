@extends('layouts.app')

@section('conteudo')
    <div class="max-w-xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-6 text-center text-primary">{{ $livro->titulo }}</h2>

            <div class="space-y-3 text-lg">
                <p><strong>Autor:</strong> {{ $livro->autor }}</p>
                <p><strong>Editora:</strong> {{ $livro->editora }}</p>
                <p><strong>Ano:</strong> {{ $livro->ano_publicacao }}</p>
                <p><strong>Gênero:</strong> {{ $livro->genero }}</p>
                <p><strong>Quantidade Disponível:</strong>
                    <span class="font-semibold {{ $livro->quantidade > 0 ? 'text-green-600' : 'text-red-600' }}">
                        {{ $livro->quantidade }}
                    </span>
                </p>
            </div>

            <div class="flex justify-center gap-4 mt-8">
                <a href="{{ route('livros.edit', $livro) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded">Editar</a>
                <a href="{{ route('livros.index') }}" class="bg-gray-200 hover:bg-gray-300 px-5 py-2 rounded">Voltar</a>
            </div>
        </div>
    </div>
@endsection