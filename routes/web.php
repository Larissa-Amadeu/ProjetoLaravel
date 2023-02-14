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

Route::get('/formulario', function () {
    return view('form');
}) ->name ('route_form');

Route::get('/inicio', [Controlador::class, 'teste']); 

Route::get('/cadastro', function () {
    return view('cadastro');
})->name ('route_cadastro');

Route::get('/login', function () {
    return view('login');
})->name('route_login');


//->name ('route_inicio');
//function () {
 //   return view('index');


