@extends('layouts.app')

@section('titulo-pagina')
@section('subtitulo-pagina')

@section('conteudo')
    <div class="max-w-2xl mx-auto">
        @if($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-r-xl mb-8 shadow-md">
                <div class="font-bold flex items-center gap-2 mb-1"><i class="fa-solid fa-triangle-exclamation"></i> Atenção
                </div>
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-card p-8">
            <form action="{{ route('livros.update', $livro) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-slate-700 font-medium mb-2">Título do Livro</label>
                        <input type="text" name="titulo" value="{{ old('titulo', $livro->titulo) }}"
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-accent/50 focus:border-accent outline-none transition-custom"
                            required>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-2">Autor</label>
                        <input type="text" name="autor" value="{{ old('autor', $livro->autor) }}"
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-accent/50 focus:border-accent outline-none transition-custom"
                            required>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-2">Editora</label>
                        <input type="text" name="editora" value="{{ old('editora', $livro->editora) }}"
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-accent/50 focus:border-accent outline-none transition-custom"
                            required>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-2">Ano de Publicação</label>
                        <input type="number" name="ano_publicacao"
                            value="{{ old('ano_publicacao', $livro->ano_publicacao) }}" min="1000" max="{{ date('Y') }}"
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-accent/50 focus:border-accent outline-none transition-custom"
                            required>
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-2">Gênero / Categoria</label>
                        <input type="text" name="genero" value="{{ old('genero', $livro->genero) }}"
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-accent/50 focus:border-accent outline-none transition-custom"
                            required>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-slate-700 font-medium mb-2">Quantidade Disponível</label>
                        <input type="number" name="quantidade" value="{{ old('quantidade', $livro->quantidade) }}" min="0"
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-accent/50 focus:border-accent outline-none transition-custom"
                            required>
                    </div>
                </div>

                <div class="flex justify-end gap-4 pt-4 border-t border-slate-100">
                    <a href="{{ route('livros.index') }}"
                        class="px-6 py-3 border border-slate-200 rounded-xl hover:bg-slate-50 transition-custom">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="bg-accent hover:bg-accent/90 text-white px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-custom">
                        Atualizar Livro
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection