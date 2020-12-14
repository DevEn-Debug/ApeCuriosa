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

Route::view('/', 'index')->name('index');
Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::get('/inostrimieli', 'ApeController@mieli')->name('inostrimieli');
Route::get('/prodotti', 'ApeController@prodotti')->name('prodotti');
Route::view('/attestati', 'attestati')->name('attestati');
Route::view('/contatti', 'contatti')->name('contatti');
Route::view('/info', 'info')->name('info');
Route::get('/inostrimieli/{title}', 'ApeController@show')->name('show');
