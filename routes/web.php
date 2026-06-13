<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

// Página de boas-vindas
Route::get('/', function () {
    return view('welcome');
});

// Rotas do CRUD de livros
Route::resource('livros', LivroController::class);