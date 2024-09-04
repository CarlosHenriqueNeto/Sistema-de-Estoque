<?php

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

//Estoque

Route::get('/estoque',[EstoqueController::class,'index'])->name('estoque');

Route::get('/estoque/entrada',[EstoqueController::class,'create'])->name('estoque.novo');
Route::post('/estoque/entrada',[EstoqueController::class,'store'])->name('estoque.novo');

Route::get('/estoque/editar/{id}',[EstoqueController::class,'edit'])->name('estoque.editar');
Route::put('/estoque/editar/{id}',[EstoqueController::class,'update'])->name('estoque.editar');

Route::get('/estoque/excluir/{id}',[EstoqueController::class,'delete'])->name('estoque.excluir');
Route::delete('/estoque/excluir/{id}',[EstoqueController::class,'destroy'])->name('estoque.excluir');


//Fornecedores

Route::get('/fornecedores',[FornecedoresController::class,'index'])->name('fornecedores');

Route::get('/fornecedores/cadastro', function () {
    return view('fornecedores.novo');
});
Route::post('/fornecedores/cadastro',[FornecedoresController::class,'store'])->name('fornecedores.novo');

Route::get('/fornecedores/editar/{id}',[FornecedoresController::class,'edit'])->name('fornecedores.editar');
Route::put('/fornecedores/editar/{id}',[FornecedoresController::class,'update'])->name('fornecedores.editar');

Route::get('/fornecedores/excluir/{id}',[FornecedoresController::class,'delete'])->name('fornecedores.excluir');
Route::delete('/fornecedores/excluir/{id}',[FornecedoresController::class,'destroy'])->name('fornecedores.excluir');

//Produtos
Route::get('/produtos',[ProdutosController::class,'index'])->name('produtos');

Route::get('/produtos/cadastro', function () {
    return view('produtos.novo');
});
Route::post('/produtos/cadastro',[ProdutosController::class,'store'])->name('produto.novo');

Route::get('/produtos/editar/{id}',[ProdutosController::class,'edit'])->name('produto.editar');
Route::put('/produtos/editar/{id}',[ProdutosController::class,'update'])->name('produto.editar');

Route::get('/produtos/excluir/{id}',[ProdutosController::class,'delete'])->name('produto.excluir');
Route::delete('/produtos/excluir/{id}',[ProdutosController::class,'destroy'])->name('produto.excluir');









