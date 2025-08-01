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
    return view('inicio');
});
Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/Maestria-En-Ciencia-De-Datos', function () {
    return view('cienciaDatos');
});
Route::get('/Licenciatura-en-Estudios-Mexicanos', function () {
    return view('estudiosMexicanos');
});
Route::get('/Recursos-Academicos', function () {
    return view('recursosAcademicos');
});
Route::get('/pagina-costruccion', function () {
    return view('PaginaConstruccion');
});
