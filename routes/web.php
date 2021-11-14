<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogCon;

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
//Aqui mostramos el formulario
Route::get('/login', [LogCon::class, 'ingresar'])->name('ingresar');
//donde procesamos el formulario
Route::post('/validar',[LogCon::class, 'validar'])->name('validar');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});