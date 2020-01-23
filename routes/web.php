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
Route::group( ['middleware' => 'auth'], function()
{
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('vagas','VagaController');

});
Auth::routes();


Route::get('/vaga/rits/{id}', 'VagaController@show');
Route::post('/cadastro/vaga/{id}', 'VagaController@Enviocurriculo')->name('curriculo.store');
