<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/pessoas')->group(function(){
    Route::get('/', [PessoaController::class, 'index']);

    Route::get('/cadastrar', [PessoaController::class, 'create']);    
    Route::post('/cadastrar', [PessoaController::class, 'store'])
        ->name('cadastrarpessoa');

    Route::get('/edit/{id}', [PessoaController::class, 'edit']);   
    Route::post('/edit/{id}', [PessoaController::class, 'edit'])
    ->name('editarpessoa');

    Route::get('delete/{id}', [PessoaController::class, 'destroy'])->name('deletarpessoas');

});


