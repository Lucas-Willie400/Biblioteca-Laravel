@extends('layouts.app')

@section('conteudo')
    <div>
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Gerenciar Livros</h2>
            <a href="{{ route('livros.create') }}"
                class="bg-primary hover:bg-blue-800 text-white px-5 py-2 rounded-lg transition">
                + Novo Livro
            </a>
        </div>

        @if(session('sucesso'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('sucesso') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Título</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Autor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ano</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Quantidade</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($livros as $livro)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $livro->titulo }}</td>
                            <td class="px-6 py-4">{{ $livro->autor }}</td>
                            <td class="px-6 py-4">{{ $livro->ano_publicacao }}</td>
                            <td class="px-6 py-4">{{ $livro->quantidade }}</td>
                            <td class="px-6 py-4 text-center space-x-2">
                                <a href="{{ route('livros.show', $livro) }}" class="text-blue-600 hover:underline">Ver</a>
                                <a href="{{ route('livros.edit', $livro) }}" class="text-yellow-600 hover:underline">Editar</a>
                                <form action="{{ route('livros.destroy', $livro) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Nenhum livro cadastrado ainda.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection