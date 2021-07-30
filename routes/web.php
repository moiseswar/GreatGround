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
})->name('welcome');

Route::get('login', function () {
    return view('auth/login');
})->name('login');

Route::get('register', function () {
    return view('auth/register');
})->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//semillas crud
Route::get('/semillas/', 'controllarSemillas@index')->name('semillas.index');
Route::post('/semillas', 'controllarSemillas@create')->name('semillas.create');
Route::post('/semillas/{id}', 'controllarSemillas@destroy')->name('semillas.destroy');
Route::post('/semillas/cambiar/{id}', 'controllarSemillas@show')->name('semillas.show');
Route::post('/semillas/Cambiando/{id}', 'controllarSemillas@edit')->name('semillas.edit');

//cultivos crud
Route::post('/cultivos/{id}', 'controladorCultivos@index')->name('cultivos.create');
Route::post('/cultivos', 'controladorCultivos@store')->name('cultivos.store');
Route::get('/cultivos/', 'controladorCultivos@show')->name('cultivos.show');
Route::post('/cultivos/actualizando/{id}', 'controladorCultivos@finalizar')->name('cultivos.finalizar');
Route::post('/cultivos/hecho/{id}', 'controladorCultivos@edit')->name('cultivos.edit');
Route::post('/cultivos/hecho/Actualizando/{id}', 'controladorCultivos@updateComents')->name('cultivos.coment');

Route::get('/clima', 'controladorClima@index')->name('clima.index');