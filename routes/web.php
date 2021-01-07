<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE

// METODO A.
// Route::get('/', function () {
//     // Get comics list (dopo aver creato un file nel CONFIG di nome COMICS con all'interno i DATI, criamo una variabile e sviluppiamo la funzione CONFIG )
//     $comics = config('comics');
//     // dd($comics);
//     return view('home', compact('comics'));
// }) ->name('home') ;


// METODO B.
Route::get('/', 'HomeController@index') -> name('home');

// COMICS DETAIL
Route::get('/comic/{id}', 'ComicController@show') -> name('comic-detail');
