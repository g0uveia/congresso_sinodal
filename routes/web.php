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

# GUEST ROUTES
Route::GET('/', 'InscritoController@create')->name('home');
Route::GET('/mail', function () {
    $user = App\Inscrito::first();
    return (new App\Mail\InformacoesPagamento($user));
});
Route::POST('/inscricao', 'InscritoController@store');
Route::POST('/getIgrejasByPresbiterio', 'GetIgrejasByPresbiterio');

Route::GET('/admin', 'PageController@admin')->name('login');
Route::POST('/admin', 'AdminController@login');

# AUTH ROUTES
Route::middleware('auth')->prefix('admin')->group(function () {
    # ADMIN ROUTES
    Route::name('admin.')->group(function () {
        Route::GET('/dashboard', 'AdminController@dashboard')->name('dashboard');
        Route::GET('/logout', 'AdminController@logout')->name('logout');
    });

    # INSCRITO ROUTES
    Route::name('inscrito.')->group(function () {
        Route::GET('/inscritos', 'InscritoController@index')->name('index');
        Route::GET('/inscritos/search/', 'InscritoController@search')->name('search');
        Route::GET('/inscrito/{inscrito}', 'InscritoController@show')->name('show');
        Route::POST('/inscrito/{inscrito}/delete', 'InscritoController@delete')->name('delete');
    });

    # PAGAMENTO ROUTES
    Route::name('pagamento.')->group(function () {
        Route::GET('/pagamentos', 'PagamentoController@index')->name('index');
        Route::GET('/pagamentos/add/{inscrito}', 'PagamentoController@create')->name('create');
        Route::POST('/pagamento/{pagamento}/delete', 'PagamentoController@delete')->name('delete');
        Route::POST('/pagamentos', 'PagamentoController@store');
    });

});
