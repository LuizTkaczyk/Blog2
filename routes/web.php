<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('prova', function () {
    return 'Autorizado';
})->middleware(['age','auth:sanctum']); //referenciando o apelido que foi criado em Kernel.php para a autenticação da idade

Route::get('nao-autorizado', function () {
    return "Não autorizado";
});
