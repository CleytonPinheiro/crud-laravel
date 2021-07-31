<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', [PessoaController::class, 'index']);

Route::get('/pessoas/cadastrar', [PessoaController::class, 'create']);
Route::post('/pessoas/cadastrar', [PessoaController::class, 'store'])
    ->name('cadastrarpessoa');

Route::get('/pessoas/{id}/edit', [PessoaController::class, 'edit'])
    ->name('editarpessoa');


    




