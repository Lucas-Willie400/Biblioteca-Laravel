<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    // Listar todos os livros
    public function index()
    {
        $livros = Livro::latest()->get();
        return view('livros.index', compact('livros'));
    }

    // Mostrar formulário de cadastro
    public function create()
    {
        return view('livros.create');
    }

    // Salvar novo livro
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editora' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer|min:1000|max:' . date('Y'),
            'genero' => 'required|string|max:100',
            'quantidade' => 'required|integer|min:0',
        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')->with('sucesso', 'Livro cadastrado com sucesso!');
    }

    // Mostrar um único livro
    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    // Mostrar formulário de edição
    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    // Atualizar dados do livro
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editora' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer|min:1000|max:' . date('Y'),
            'genero' => 'required|string|max:100',
            'quantidade' => 'required|integer|min:0',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')->with('sucesso', 'Livro atualizado com sucesso!');
    }

    // Excluir livro
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index')->with('sucesso', 'Livro removido com sucesso!');
    }
}
