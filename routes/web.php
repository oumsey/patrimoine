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

   Route::post('destroy/{BQE_NUM}}', function () { 
    return view('banque.index'); 
});
 // Home
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin.home']);
//Type rubrique
Route::get('/typerubrique', ['uses' => 'TyperubriqueController@index', 'as' => 'parametres.typerubrique.index']);
Route::get('/typerubrique/create', ['uses' => 'TyperubriqueController@create', 'as' => 'parametres.typerubrique.create']);
Route::post('/typerubrique/store', ['uses' => 'TyperubriqueController@store', 'as' => 'parametres.typerubrique.store']);
Route::get('/typerubrique/{id}/edit', ['uses' => 'TyperubriqueController@edit', 'as' => 'parametres.typerubrique.create']);
Route::get('/typerubrique/delete/{id}', ['uses' => 'TyperubriqueController@delete', 'as' => 'parametres.typerubrique.delete']);
Route::get('/typerubrique/deletes', ['uses' => 'TyperubriqueController@deletes', 'as' => 'parametres.typerubrique.deletes']);
Route::post('/typerubrique/update', ['uses' => 'TyperubriqueController@update', 'as' => 'parametres.typerubrique.update']);
Route::get('/rubrique', ['uses' => 'RubriqueController@index', 'as' => 'parametres.rubrique.index']);

