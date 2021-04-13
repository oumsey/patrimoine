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

//Nature projet
Route::get('/natureprojet', ['uses' => 'NatureprojetController@index', 'as' => 'parametres.natureprojet.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/natureprojet/create', ['uses' => 'NatureprojetController@create', 'as' => 'parametres.natureprojet.create']);
Route::post('/natureprojet/store', ['uses' => 'NatureprojetController@store', 'as' => 'parametres.natureprojet.store']);
Route::get('/natureprojet/{id}/edit', ['uses' => 'NatureprojetController@edit', 'as' => 'parametres.natureprojet.create']);
Route::get('/natureprojet/delete/{id}', ['uses' => 'NatureprojetController@delete', 'as' => 'parametres.natureprojet.delete']);
Route::get('/natureprojet/deletes', ['uses' => 'NatureprojetController@deletes', 'as' => 'parametres.natureprojet.deletes']);
Route::post('/natureprojet/update', ['uses' => 'NatureprojetController@update', 'as' => 'parametres.natureprojet.update']);

//Ville
Route::get('/ville', ['uses' => 'VilleController@index', 'as' => 'parametres.ville.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/ville/create', ['uses' => 'VilleController@create', 'as' => 'parametres.ville.create']);
Route::post('/ville/store', ['uses' => 'VilleController@store', 'as' => 'parametres.ville.store']);
Route::get('/ville/{id}/edit', ['uses' => 'VilleController@edit', 'as' => 'parametres.ville.create']);
Route::get('/ville/delete/{id}', ['uses' => 'VilleController@delete', 'as' => 'parametres.ville.delete']);
Route::get('/ville/deletes', ['uses' => 'VilleController@deletes', 'as' => 'parametres.ville.deletes']);
Route::post('/ville/update', ['uses' => 'VilleController@update', 'as' => 'parametres.ville.update']);

//Commune
Route::get('/commune', ['uses' => 'CommuneController@index', 'as' => 'parametres.commune.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/commune/create', ['uses' => 'CommuneController@create', 'as' => 'parametres.commune.create']);
Route::post('/commune/store', ['uses' => 'CommuneController@store', 'as' => 'parametres.commune.store']);
Route::get('/commune/{id}/edit', ['uses' => 'CommuneController@edit', 'as' => 'parametres.commune.create']);
Route::get('/commune/delete/{id}', ['uses' => 'CommuneController@delete', 'as' => 'parametres.commune.delete']);
Route::get('/commune/deletes', ['uses' => 'CommuneController@deletes', 'as' => 'parametres.commune.deletes']);
Route::post('/commune/update', ['uses' => 'CommuneController@update', 'as' => 'parametres.commune.update']);

//Quartier
Route::get('/quartier', ['uses' => 'QuartierController@index', 'as' => 'parametres.quartier.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/quartier/create', ['uses' => 'QuartierController@create', 'as' => 'parametres.quartier.create']);
Route::post('/quartier/store', ['uses' => 'QuartierController@store', 'as' => 'parametres.quartier.store']);
Route::get('/quartier/{id}/edit', ['uses' => 'QuartierController@edit', 'as' => 'parametres.quartier.create']);
Route::get('/quartier/delete/{id}', ['uses' => 'QuartierController@delete', 'as' => 'parametres.quartier.delete']);
Route::get('/quartier/deletes', ['uses' => 'QuartierController@deletes', 'as' => 'parametres.quartier.deletes']);
Route::post('/quartier/update', ['uses' => 'QuartierController@update', 'as' => 'parametres.quartier.update']);

//PHASE
Route::get('/phase', ['uses' => 'PhaseController@index', 'as' => 'parametres.phase.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/phase/create', ['uses' => 'PhaseController@create', 'as' => 'parametres.phase.create']);
Route::post('/phase/store', ['uses' => 'PhaseController@store', 'as' => 'parametres.phase.store']);
Route::get('/phase/{id}/edit', ['uses' => 'PhaseController@edit', 'as' => 'parametres.phase.create']);
Route::get('/phase/delete/{id}', ['uses' => 'PhaseController@delete', 'as' => 'parametres.phase.delete']);
Route::get('/phase/deletes', ['uses' => 'PhaseController@deletes', 'as' => 'parametres.phase.deletes']);
Route::post('/phase/update', ['uses' => 'PhaseController@update', 'as' => 'parametres.phase.update']);

//Rubrique
Route::get('/rubrique', ['uses' => 'RubriqueController@index', 'as' => 'parametres.rubrique.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/rubrique/create', ['uses' => 'RubriqueController@create', 'as' => 'parametres.rubrique.create']);
Route::post('/rubrique/store', ['uses' => 'RubriqueController@store', 'as' => 'parametres.rubrique.store']);
Route::get('/rubrique/{id}/edit', ['uses' => 'RubriqueController@edit', 'as' => 'parametres.rubrique.create']);
Route::get('/rubrique/delete/{id}', ['uses' => 'RubriqueController@delete', 'as' => 'parametres.rubrique.delete']);
Route::get('/rubrique/deletes', ['uses' => 'RubriqueController@deletes', 'as' => 'parametres.rubrique.deletes']);
Route::post('/rubrique/update', ['uses' => 'RubriqueController@update', 'as' => 'parametres.rubrique.update']);

//Sousrubrique
Route::get('/sousrubrique', ['uses' => 'SousrubriqueController@index', 'as' => 'parametres.sousrubrique.index']);//la 3 partie represente la vue qu'on va utiliser
Route::get('/sousrubrique/create', ['uses' => 'SousrubriqueController@create', 'as' => 'parametres.sousrubrique.create']);
Route::post('/sousrubrique/store', ['uses' => 'SousrubriqueController@store', 'as' => 'parametres.sousrubrique.store']);
Route::get('/sousrubrique/{id}/edit', ['uses' => 'SousrubriqueController@edit', 'as' => 'parametres.sousrubrique.create']);
Route::get('/sousrubrique/delete/{id}', ['uses' => 'SousrubriqueController@delete', 'as' => 'parametres.sousrubrique.delete']);
Route::get('/sousrubrique/deletes', ['uses' => 'SousrubriqueController@deletes', 'as' => 'parametres.sousrubrique.deletes']);
Route::post('/sousrubrique/update', ['uses' => 'SousrubriqueController@update', 'as' => 'parametres.sousrubrique.update']);