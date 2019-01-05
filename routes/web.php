<?php

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

Route::GET('/', 'PageController@index')->name('index');

Route::GET('/inscricao', 'PageController@inscricao')->name('inscricao');
Route::POST('/inscricao', 'InscritoController@create');

Route::POST('/getIgrejasByPresbiterio', 'GetIgrejasByPresbiterio');

Route::GET('/login', 'PageController@login')->name('login');
Route::POST('/login', 'InscritoController@login');
