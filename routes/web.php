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

//Type de Biens
Route::get('/typebien', ['uses' => 'TypebienController@index', 'as' => 'parametres.typebien.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/typebien/create', ['uses' => 'TypebienController@create', 'as' => 'parametres.typebien.create']);
Route::post('/typebien/store', ['uses' => 'TypebienController@store', 'as' => 'parametres.typebien.store']);
Route::get('/typebien/{id}/edit', ['uses' => 'TypebienController@edit', 'as' => 'parametres.typebien.create']);
Route::get('/typebien/delete/{id}', ['uses' => 'TypebienController@delete', 'as' => 'parametres.typebien.delete']);
Route::get('/typebien/deletes', ['uses' => 'TypebienController@deletes', 'as' => 'parametres.typebien.deletes']);
Route::post('/typebien/update', ['uses' => 'TypebienController@update', 'as' => 'parametres.typebien.update']);

//Type de Comptes
Route::get('/typecompte', ['uses' => 'TypecompteController@index', 'as' => 'parametres.typecompte.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/typecompte/create', ['uses' => 'TypecompteController@create', 'as' => 'parametres.typecompte.create']);
Route::post('/typecompte/store', ['uses' => 'TypecompteController@store', 'as' => 'parametres.typecompte.store']);
Route::get('/typecompte/{id}/edit', ['uses' => 'TypecompteController@edit', 'as' => 'parametres.typecompte.create']);
Route::get('/typecompte/delete/{id}', ['uses' => 'TypecompteController@delete', 'as' => 'parametres.typecompte.delete']);
Route::get('/typecompte/deletes', ['uses' => 'TypecompteController@deletes', 'as' => 'parametres.typecompte.deletes']);
Route::post('/typecompte/update', ['uses' => 'TypecompteController@update', 'as' => 'parametres.typecompte.update']);

//Pays
Route::get('/pays', ['uses' => 'PaysController@index', 'as' => 'parametres.pays.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/pays/create', ['uses' => 'PaysController@create', 'as' => 'parametres.pays.create']);
Route::post('/pays/store', ['uses' => 'PaysController@store', 'as' => 'parametres.pays.store']);
Route::get('/pays/{id}/edit', ['uses' => 'PaysController@edit', 'as' => 'parametres.pays.create']);
Route::get('/pays/delete/{id}', ['uses' => 'PaysController@delete', 'as' => 'parametres.pays.delete']);
Route::get('/pays/deletes', ['uses' => 'PaysController@deletes', 'as' => 'parametres.pays.deletes']);
Route::post('/pays/update', ['uses' => 'PaysController@update', 'as' => 'parametres.pays.update']);

//Devise
Route::get('/devise', ['uses' => 'DeviseController@index', 'as' => 'parametres.devise.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/devise/create', ['uses' => 'DeviseController@create', 'as' => 'parametres.devise.create']);
Route::post('/devise/store', ['uses' => 'DeviseController@store', 'as' => 'parametres.devise.store']);
Route::get('/devise/{id}/edit', ['uses' => 'DeviseController@edit', 'as' => 'parametres.devise.create']);
Route::get('/devise/delete/{id}', ['uses' => 'DeviseController@delete', 'as' => 'parametres.devise.delete']);
Route::get('/devise/deletes', ['uses' => 'DeviseController@deletes', 'as' => 'parametres.devise.deletes']);
Route::post('/devise/update', ['uses' => 'DeviseController@update', 'as' => 'parametres.devise.update']);

//Famille
Route::get('/famille', ['uses' => 'FamilleController@index', 'as' => 'parametres.famille.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/famille/create', ['uses' => 'FamilleController@create', 'as' => 'parametres.famille.create']);
Route::post('/famille/store', ['uses' => 'FamilleController@store', 'as' => 'parametres.famille.store']);
Route::get('/famille/{id}/edit', ['uses' => 'FamilleController@edit', 'as' => 'parametres.famille.create']);
Route::get('/famille/delete/{id}', ['uses' => 'FamilleController@delete', 'as' => 'parametres.famille.delete']);
Route::get('/famille/deletes', ['uses' => 'FamilleController@deletes', 'as' => 'parametres.famille.deletes']);
Route::post('/famille/update', ['uses' => 'FamilleController@update', 'as' => 'parametres.famille.update']);

//Région
Route::get('/region', ['uses' => 'RegionController@index', 'as' => 'parametres.region.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/region/create', ['uses' => 'RegionController@create', 'as' => 'parametres.region.create']);
Route::post('/region/store', ['uses' => 'RegionController@store', 'as' => 'parametres.region.store']);
Route::get('/region/{id}/edit', ['uses' => 'RegionController@edit', 'as' => 'parametres.region.create']);
Route::get('/region/delete/{id}', ['uses' => 'RegionController@delete', 'as' => 'parametres.region.delete']);
Route::get('/region/deletes', ['uses' => 'RegionController@deletes', 'as' => 'parametres.region.deletes']);
Route::post('/region/update', ['uses' => 'RegionController@update', 'as' => 'parametres.region.update']);