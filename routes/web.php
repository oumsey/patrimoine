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
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'accueil.home']);
//Type rubrique
Route::get('/typerubrique', ['uses' => 'TyperubriqueController@index', 'as' => 'parametres.typerubrique.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/typerubrique/create', ['uses' => 'TyperubriqueController@create', 'as' => 'parametres.typerubrique.create']);
Route::post('/typerubrique/store', ['uses' => 'TyperubriqueController@store', 'as' => 'parametres.typerubrique.store']);
Route::get('/typerubrique/{id}/edit', ['uses' => 'TyperubriqueController@edit', 'as' => 'parametres.typerubrique.create']);
Route::get('/typerubrique/delete/{id}', ['uses' => 'TyperubriqueController@delete', 'as' => 'parametres.typerubrique.delete']);
Route::get('/typerubrique/deletes', ['uses' => 'TyperubriqueController@deletes', 'as' => 'parametres.typerubrique.deletes']);
Route::post('/typerubrique/update', ['uses' => 'TyperubriqueController@update', 'as' => 'parametres.typerubrique.update']);
Route::get('/rubrique', ['uses' => 'RubriqueController@index', 'as' => 'parametres.rubrique.index']);

//BANQUES
Route::get('/banque', ['uses' => 'BanqueController@index', 'as' => 'parametres.banque.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/banque/create', ['uses' => 'BanqueController@create', 'as' => 'parametres.banque.create']);
Route::post('/banque/store', ['uses' => 'BanqueController@store', 'as' => 'parametres.banque.store']);
Route::get('/banque/{id}/edit', ['uses' => 'BanqueController@edit', 'as' => 'parametres.banque.create']);
Route::get('/banque/delete/{id}', ['uses' => 'BanqueController@delete', 'as' => 'parametres.banque.delete']);
Route::get('/banque/deletes', ['uses' => 'BanqueController@deletes', 'as' => 'parametres.banque.deletes']);
Route::post('/banque/update', ['uses' => 'BanqueController@update', 'as' => 'parametres.banque.update']);

//Agence Bancaire
Route::get('/agencebancaire', ['uses' => 'AgencebancaireController@index', 'as' => 'parametres.agencebancaire.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/agencebancaire/create', ['uses' => 'AgencebancaireController@create', 'as' => 'parametres.agencebancaire.create']);
Route::post('/agencebancaire/store', ['uses' => 'AgencebancaireController@store', 'as' => 'parametres.agencebancaire.store']);
Route::get('/agencebancaire/{id}/edit', ['uses' => 'AgencebancaireController@edit', 'as' => 'parametres.agencebancaire.create']);
Route::get('/agencebancaire/delete/{id}', ['uses' => 'AgencebancaireController@delete', 'as' => 'parametres.agencebancaire.delete']);
Route::get('/agencebancaire/deletes', ['uses' => 'AgencebancaireController@deletes', 'as' => 'parametres.agencebancaire.deletes']);
Route::post('/agencebancaire/update', ['uses' => 'AgencebancaireController@update', 'as' => 'parametres.agencebancaire.update']);
Route::post('/banque', ['uses' => 'BanqueController@index', 'as' => 'parametres.banque.index']);
//Type de phases
Route::get('/typephase', ['uses' => 'TypephaseController@index', 'as' => 'parametres.typephase.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/typephase/create', ['uses' => 'TypephaseController@create', 'as' => 'parametres.typephase.create']);
Route::post('/typephase/store', ['uses' => 'TypephaseController@store', 'as' => 'parametres.typephase.store']);
Route::get('/typephase/{id}/edit', ['uses' => 'TypephaseController@edit', 'as' => 'parametres.typephase.create']);
Route::get('/typephase/delete/{id}', ['uses' => 'TypephaseController@delete', 'as' => 'parametres.typephase.delete']);
Route::get('/typephase/deletes', ['uses' => 'TypephaseController@deletes', 'as' => 'parametres.typephase.deletes']);
Route::post('/typephase/update', ['uses' => 'TypephaseController@update', 'as' => 'parametres.typephase.update']);
//Type de projets
Route::get('/typeprojet', ['uses' => 'TypeprojetController@index', 'as' => 'parametres.typeprojet.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/typeprojet/create', ['uses' => 'TypeprojetController@create', 'as' => 'parametres.typeprojet.create']);
Route::post('/typeprojet/store', ['uses' => 'TypeprojetController@store', 'as' => 'parametres.typeprojet.store']);
Route::get('/typeprojet/{id}/edit', ['uses' => 'TypeprojetController@edit', 'as' => 'parametres.typeprojet.create']);
Route::get('/typeprojet/delete/{id}', ['uses' => 'TypeprojetController@delete', 'as' => 'parametres.typeprojet.delete']);
Route::get('/typeprojet/deletes', ['uses' => 'TypeprojetController@deletes', 'as' => 'parametres.typeprojet.deletes']);
Route::post('/typeprojet/update', ['uses' => 'TypeprojetController@update', 'as' => 'parametres.typeprojet.update']);