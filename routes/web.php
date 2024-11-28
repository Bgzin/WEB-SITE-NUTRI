<?php

use Illuminate\Support\Facades\Route;

// Rota para exibir a página inicial (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Rota para exibir a página de cadastro
Route::get('/cadastro', function () {
    return view('views.usuarios.cadastro');
});

Route::get('/sobre-nos', function () {
    return view('pages.sobre-nos');
});

// Rota para processar o cadastro (comentada até você definir o controlador)
// Route::post('/cadastro', [AuthController::class, 'register']);
