<?php

use App\Http\Controllers\Controlador;
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

Route::get('/formulario', [Controlador :: class, 'formulario'])->name('route_formulario')->middleware('logar');

Route::post('/formulario-usuario',[Controlador::class,'formularioUsuario'])->name('formulario-usuario');

Route::post('/proposito-de-uso',[Controlador::class,'propositoDeUso'])->name('proposito-de-uso');

Route::post('/compartilhamento',[Controlador::class,'compartilhamento'])->name('compartilhamento');

Route::post('/dadosPessoais',[Controlador::class,'dadosPessoais'])->name('dadosPessoais');

Route::post('/atores',[Controlador::class,'atores'])->name('atores');

Route::post('/agenciamento',[Controlador::class,'agenciamento'])->name('agenciamento');




Route::get('/logout', [Controlador::class, 'logout']);

Route::get('/inicio', [Controlador::class, 'inicio'])->name('route_inicio'); 


Route::get('/cadastro',[Controlador ::class, 'cadastro'])->name('route_cadastro');
Route::post('/cadastro-usuario',[Controlador::class,'cadastroUsuario'])->name('cadastro-usuario');

Route::get('/login',[Controlador::class, 'login'])->name('route_login');
Route::post('/login-usuario', [Controlador::class,'loginUsuario'])->name('login-usuario');

