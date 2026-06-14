@extends('layouts.app')

@section('titulo-pagina')
@section('subtitulo-pagina')

@section('conteudo')
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-2xl shadow-card overflow-hidden">
            <div class="h-40 bg-gradient-to- from-primary to-secondary"></div>

            <div class="px-8 pb-8 -mt-16 relative">
                <div
                    class="w-32 h-32 bg-white rounded-2xl shadow-lg flex items-center justify-center text-5xl text-accent mx-auto mb-6 border-4 border-white">
                    <i class="fa-solid fa-book-open"></i>
                </div>

                <h2 class="text-3xl font-bold text-center text-primary mb-2">{{ $livro->titulo }}</h2>
                <p class="text-center text-slate-500 mb-8">por {{ $livro->autor }}</p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl">
                            <i class="fa-solid fa-building text-accent text-lg w-6 text-center"></i>
                            <div>
                                <p class="text-xs text-slate-500">Editora</p>
                                <p class="font-medium text-primary">{{ $livro->editora }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl">
                            <i class="fa-solid fa-calendar text-accent text-lg w-6 text-center"></i>
                            <div>
                                <p class="text-xs text-slate-500">Ano de Publicação</p>
                                <p class="font-medium text-primary">{{ $livro->ano_publicacao }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl">
                            <i class="fa-solid fa-tag text-accent text-lg w-6 text-center"></i>
                            <div>
                                <p class="text-xs text-slate-500">Gênero</p>
                                <p class="font-medium text-primary">{{ $livro->genero }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl">
                            <i class="fa-solid fa-boxes-stacked text-accent text-lg w-6 text-center"></i>
                            <div>
                                <p class="text-xs text-slate-500">Quantidade Disponível</p>
                                <p class="font-medium {{ $livro->quantidade > 0 ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $livro->quantidade }} unidade(s)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center gap-4 pt-4">
                    <a href="{{ route('livros.edit', $livro) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-custom flex items-center gap-2">
                        <i class="fa-solid fa-pen-to-square"></i> Editar Dados
                    </a>
                    <a href="{{ route('livros.index') }}"
                        class="border border-slate-200 hover:bg-slate-50 px-6 py-3 rounded-xl transition-custom">
                        Voltar para Lista
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection