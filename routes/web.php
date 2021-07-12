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
Route::get('/semillas/{iduser}', 'controllarSemillas@index')->name('semillas.index');
Route::post('/semillas', 'controllarSemillas@create')->name('semillas.create');
Route::post('/semillas/{id}', 'controllarSemillas@destroy')->name('semillas.destroy');
Route::post('/semillas/cambiar/{id}', 'controllarSemillas@show')->name('semillas.show');
Route::post('/semillas/Cambiando/{id}', 'controllarSemillas@edit')->name('semillas.edit');

Route::get('/clima', 'controladorClima@index')->name('clima.index');