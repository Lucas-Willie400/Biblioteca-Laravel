@extends('layouts.app')

@section('conteudo')
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Editar Livro</h2>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('livros.update', $livro) }}" method="POST"
            class="bg-white p-6 rounded-lg shadow-md space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 mb-1">Título:</label>
                <input type="text" name="titulo" value="{{ old('titulo', $livro->titulo) }}"
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Autor:</label>
                <input type="text" name="autor" value="{{ old('autor', $livro->autor) }}"
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Editora:</label>
                <input type="text" name="editora" value="{{ old('editora', $livro->editora) }}"
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 mb-1">Ano de Publicação:</label>
                    <input type="number" name="ano_publicacao" value="{{ old('ano_publicacao', $livro->ano_publicacao) }}"
                        min="1000" max="{{ date('Y') }}"
                        class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label class="block text-gray-700 mb-1">Gênero:</label>
                    <input type="text" name="genero" value="{{ old('genero', $livro->genero) }}"
                        class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Quantidade Disponível:</label>
                <input type="number" name="quantidade" value="{{ old('quantidade', $livro->quantidade) }}" min="0"
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ route('livros.index') }}" class="px-5 py-2 border rounded hover:bg-gray-100">Cancelar</a>
                <button type="submit" class="bg-primary text-white px-5 py-2 rounded hover:bg-blue-800">Atualizar
                    Livro</button>
            </div>
        </form>
    </div>
@endsection