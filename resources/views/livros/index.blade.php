@extends('layouts.app')

@section('titulo-pagina')
@section('subtitulo-pagina')

@section('conteudo')
    <!-- Ações e Alerta -->
    <div class="flex justify-between items-center mb-8">
        <div></div>
        <a href="{{ route('livros.create') }}"
            class="bg-accent hover:bg-accent/90 text-white px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-custom flex items-center gap-2">
            <i class="fa-solid fa-plus"></i> Novo Livro
        </a>
    </div>

    @if(session('sucesso'))
        <div
            class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-r-xl mb-8 flex items-center gap-3 shadow-md">
            <i class="fa-solid fa-circle-check text-xl"></i>
            {{ session('sucesso') }}
        </div>
    @endif

    <!-- Tabela Moderna -->
    <div class="bg-white rounded-2xl shadow-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="px-6 py-4 font-semibold text-slate-600">Título</th>
                        <th class="px-6 py-4 font-semibold text-slate-600">Autor</th>
                        <th class="px-6 py-4 font-semibold text-slate-600">Ano</th>
                        <th class="px-6 py-4 font-semibold text-slate-600">Quantidade</th>
                        <th class="px-6 py-4 font-semibold text-slate-600 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($livros as $livro)
                        <tr class="hover:bg-slate-50 transition-custom">
                            <td class="px-6 py-5 font-medium text-primary">{{ $livro->titulo }}</td>
                            <td class="px-6 py-5 text-slate-600">{{ $livro->autor }}</td>
                            <td class="px-6 py-5 text-slate-600">{{ $livro->ano_publicacao }}</td>
                            <td class="px-6 py-5">
                                <span
                                    class="px-3 py-1 rounded-full text-sm font-medium {{ $livro->quantidade > 0 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $livro->quantidade }}
                                </span>
                            </td>
                            <td class="px-6 py-5 text-center space-x-3">
                                <a href="{{ route('livros.show', $livro) }}"
                                    class="text-blue-600 hover:text-blue-800 transition-custom" title="Ver detalhes">
                                    <i class="fa-solid fa-eye text-lg"></i>
                                </a>
                                <a href="{{ route('livros.edit', $livro) }}"
                                    class="text-yellow-500 hover:text-yellow-700 transition-custom" title="Editar">
                                    <i class="fa-solid fa-pen-to-square text-lg"></i>
                                </a>
                                <form action="{{ route('livros.destroy', $livro) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Tem certeza que deseja excluir este livro? Essa ação não pode ser desfeita.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 transition-custom"
                                        title="Excluir">
                                        <i class="fa-solid fa-trash-can text-lg"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                                <div class="flex flex-col items-center gap-3">
                                    <i class="fa-solid fa-book-bookmark text-4xl text-slate-300"></i>
                                    <p>Nenhum livro cadastrado ainda.</p>
                                    <a href="{{ route('livros.create') }}" class="text-accent hover:underline">Cadastre o
                                        primeiro livro</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection