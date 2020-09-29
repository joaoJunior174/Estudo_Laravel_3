<?php

use App\Http\Controllers\ProdutoController;
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

// Route::get('/', function () {
//     //return view('welcome');
//     $ar=array("joao","aurelio");
//     return view('meuteste',['meu'=>$ar]);
// });

Route::get('/', function () {
    return view('cadastro');
});
Route::get('/produto', 'ProdutoController@index');
Route::post('/produto', 'ProdutoController@criar');
Route::put('/produto', 'ProdutoController@editar');
Route::post('/cadastro', 'Cadastro@salvar');
Route::get('/cadastro', 'Cadastro@ler');


