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
 // Partie de la banque
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin.home']);
Route::get('/typerubrique', ['uses' => 'TyperubriqueController@index', 'as' => 'parametres.typerubrique.index']);
Route::get('/typerubrique/create', ['uses' => 'TyperubriqueController@create', 'as' => 'parametres.typerubrique.create']);
Route::post('/typerubrique/store', ['uses' => 'TyperubriqueController@store', 'as' => 'parametres.typerubrique.store']);
Route::get('/typerubrique/{id}/edit', ['uses' => 'TyperubriqueController@edit', 'as' => 'parametres.typerubrique.create']);
Route::get('/typerubrique/delete/{id}', ['uses' => 'TyperubriqueController@delete', 'as' => 'parametres.typerubrique.delete']);
Route::post('/typerubrique/update', ['uses' => 'TyperubriqueController@update', 'as' => 'parametres.typerubrique.update']);
Route::get('/rubrique', ['uses' => 'RubriqueController@index', 'as' => 'parametres.rubrique.index']);
Route::patch('/update/{BQE_NUM}', 'BanqueController@update');
Route::post('/store', 'BanqueController@store'); //la route du formulaire creerbanque
Route::get('/creer', 'BanqueController@creer');//après @ lenomquivientestlenom dela fonction qui se trouve dans le controler
Route::get('/afficher/{BQE_NUM}', 'BanqueController@afficher');
Route::get('/show/{BQE_NUM}', 'BanqueController@show');
Route::delete('/destroy/{BQE_NUM}', 'BanqueController@destroy');
Route::get('/index', 'BanqueController@index');

//PARTIR RUBRIQUE
Route::get('/creerrubrique', 'RubriqueController@creerrubrique');
Route::patch('/updaterubrique/{RUB_NUM}', 'RubriqueController@updaterubrique');
Route::post('/storerubrique', 'RubriqueController@storerubrique'); 
Route::get('/afficherrubrique/{RUB_NUM}', 'RubriqueController@afficherrubrique');
Route::get('/showrubrique/{RUB_NUM}', 'RubriqueController@showrubrique');
Route::delete('/destroyrubrique/{RUB_NUM}', 'RubriqueController@destroyrubrique');
Route::get('/indexrubrique', 'RubriqueController@indexrubrique');

//partie sousrubrique
Route::get('/creersousrubrique', 'SousrubriqueController@creersousrubrique');
Route::patch('/updatesousrubrique/{RUB_NUM}', 'SousrubriqueController@updatesousrubrique');
Route::post('/storesousrubrique', 'SousrubriqueController@storesousrubrique'); 
Route::get('/affichersousrubrique/{RUB_NUM}', 'SousrubriqueController@affichersousrubrique');
Route::get('/showsousrubrique/{RUB_NUM}', 'SousrubriqueController@showsousrubrique');
Route::delete('/destroysousrubrique/{RUB_NUM}', 'SousrubriqueController@destroysousrubrique');
Route::get('/indexsousrubrique', 'SousrubriqueController@indexsousrubrique');

// partir type rubrique
Route::get('/creertyperubrique', 'TyperubriqueController@creertyperubrique');
Route::patch('/updatetyperubrique/{TRB_NUM}', 'TyperubriqueController@updatetyperubrique');
Route::post('/storetyperubrique', 'TyperubriqueController@storetyperubrique'); 
Route::get('/affichertyperubrique/{TRB_NUM}', 'TyperubriqueController@affichertyperubrique');
Route::get('/showtyperubrique/{TRB_NUM}', 'TyperubriqueController@showtyperubrique');
Route::delete('/destroytyperubrique/{TRB_NUM}', 'TyperubriqueController@destroytyperubrique');
Route::get('/indextyperubrique', 'TyperubriqueController@indextyperubrique');

//partie type bien
Route::get('/creertypebien', 'TypebienController@creertypebien');
Route::patch('/updatetypebien/{TBI_NUM}', 'TypebienController@updatetypebien');
Route::post('/storetypebien', 'TypebienController@storetypebien'); 
Route::get('/affichertypebien/{TBI_NUM}', 'TypebienController@affichertypebien');
Route::get('/showtypebien/{TBI_NUM}', 'TypebienController@showtypebien');
Route::delete('/destroytypebien/{TBI_NUM}', 'TypebienController@destroytypebien');
Route::get('/indextypebien', 'TypebienController@indextypebien');

//partie type compte
Route::get('/creertypecompte', 'TypecompteController@creertypecompte');
Route::patch('/updatetypecompte/{TCP_NUM}', 'TypecompteController@updatetypecompte');
Route::post('/storetypecompte', 'TypecompteController@storetypecompte'); 
Route::get('/affichertypecompte/{TCP_NUM}', 'TypecompteController@affichertypecompte');
Route::get('/showtypecompte/{TCP_NUM}', 'TypecompteController@showtypecompte');
Route::delete('/destroytypecompte/{TCP_NUM}', 'TypecompteController@destroytypecompte');
Route::get('/indextypecompte', 'TypecompteController@indextypecompte');

//partie type phase
Route::get('/creertypephase', 'TypephaseController@creertypephase');
Route::patch('/updatetypephase/{TPH_NUM}', 'TypephaseController@updatetypephase');
Route::post('/storetypephase', 'TypephaseController@storetypephase'); 
Route::get('/affichertypephase/{TPH_NUM}', 'TypephaseController@affichertypephase');
Route::get('/showtypephase/{TPH_NUM}', 'TypephaseController@showtypephase');
Route::delete('/destroytypephase/{TPH_NUM}', 'TypephaseController@destroytypephase');
Route::get('/indextypephase', 'TypephaseController@indextypephase');

//partie type projet
Route::get('/creertypeprojet', 'TypeprojetController@creertypeprojet');
Route::patch('/updatetypeprojet/{TPJ_NUM}', 'TypeprojetController@updatetypeprojet');
Route::post('/storetypeprojet', 'TypeprojetController@storetypeprojet'); 
Route::get('/affichertypeprojet/{TPJ_NUM}', 'TypeprojetController@affichertypeprojet');
Route::get('/showtypeprojet/{TPJ_NUM}', 'TypecprojetController@showtypeprojet');
Route::delete('/destroytypeprojet/{TPJ_NUM}', 'TypeprojetController@destroytypeprojet');
Route::get('/indextypeprojet', 'TypeprojetController@indextypeprojet');

//partie Pays
Route::get('/creerpays', 'PaysController@creerpays');
Route::patch('/updatepays/{PAY_NUM}', 'PaysController@updatepays');
Route::post('/storepays', 'PaysController@storepays'); 
Route::get('/afficherpays/{PAY_NUM}', 'PaysController@afficherpays');
Route::get('/showpays/{PAY_NUM}', 'PaysController@showtpays');
Route::delete('/destroypays/{PAY_NUM}', 'PaysController@destroypays');
Route::get('/indexpays', 'PaysController@indexpays');

//partie Région
Route::get('/creerregion', 'RegionController@creerregion');
Route::patch('/updateregion/{REG_NUM}', 'RegionController@updateregion');
Route::post('/storeregion', 'RegionController@storeregion'); 
Route::get('/afficherregion/{REG_NUM}', 'RegionController@afficherregion');
Route::get('/showregion/{REG_NUM}', 'RegionController@showtregion');
Route::delete('/destroyregion/{REG_NUM}', 'RegionController@destroyregion');
Route::get('/indexregion', 'RegionController@indexregion');

//partie Ville
Route::get('/creerville', 'VilleController@creerville');
Route::patch('/updateville/{VIL_NUM}', 'VilleController@updateville');
Route::post('/storeville', 'VilleController@storeville'); 
Route::get('/afficherville/{VIL_NUM}', 'VilleController@afficherville');
Route::get('/showville/{VIL_NUM}', 'VilleController@showtville');
Route::delete('/destroyville/{VIL_NUM}', 'VilleController@destroyville');
Route::get('/indexville', 'VilleController@indexville');

//Partie Commune
Route::get('/creercommune', 'CommuneController@creercommune');
Route::patch('/updatecommune/{COM_NUM}', 'CommuneController@updatecommune');
Route::post('/storecommune', 'CommuneController@storecommune'); 
Route::get('/affichercommune/{COM_NUM}', 'CommuneController@affichercommune');
Route::get('/showcommune/{COM_NUM}', 'CommuneController@showtcommune');
Route::delete('/destroycommune/{COM_NUM}', 'CommuneController@destroycommune');
Route::get('/indexcommune', 'CommuneController@indexcommune');

//Partie QUartier
Route::get('/creerquartier', 'QuartierController@creerquartier');
Route::patch('/updatequartier/{QRT_NUM}', 'QuartierController@updatequartier');
Route::post('/storequartier', 'QuartierController@storequartier'); 
Route::get('/afficherquartier/{QRT_NUM}', 'QuartierController@afficherquartier');
Route::get('/showquartier/{QRT_NUM}', 'QuartierController@showtquartier');
Route::delete('/destroyquartier/{QRT_NUM}', 'QuartierController@destroyquartier');
Route::get('/indexquartier', 'QuartierController@indexquartier');

//Partie Agencebancaire
Route::get('/creeragencebancaire', 'AgencebancaireController@creeragencebancaire');
Route::patch('/updateagencebancaire/{AGB_NUM}', 'AgencebancaireController@updateagencebancaire');
Route::post('/storeagencebancaire', 'AgencebancaireController@storeagencebancaire'); 
Route::get('/afficheragencebancaire/{AGB_NUM}', 'AgencebancaireController@afficheragencebancaire');
Route::get('/showagencebancaire/{AGB_NUM}', 'AgencebancaireController@showtagencebancaire');
Route::delete('/destroyagencebancaire/{AGB_NUM}', 'AgencebancaireController@destroyagencebancaire');
Route::get('/indexagencebancaire', 'AgencebancaireController@indexagencebancaire');

//PARTIE EXERCICE
Route::get('/creerexercice', 'ExerciceController@creerexercice');
Route::patch('/updateexercice/{EXO_NUM}', 'ExerciceController@updateexercice');
Route::post('/storeexercice', 'ExerciceController@storeexercice'); 
Route::get('/afficherexercice/{EXO_NUM}', 'ExerciceController@afficherexercice');
Route::get('/showexercice/{EXO_NUM}', 'ExerciceController@showtexercice');
Route::delete('/destroyexercice/{EXO_NUM}', 'ExerciceController@destroyexercice');
Route::get('/indexexercice', 'ExerciceController@indexexercice');

//parite famille
Route::get('/creerfamille', 'FamilleController@creerfamille');
Route::patch('/updatefamille/{FAM_NUM}', 'FamilleController@updatefamille');
Route::post('/storefamille', 'FamilleController@storefamille'); 
Route::get('/afficherfamille/{FAM_NUM}', 'FamilleController@afficherfamille');
Route::get('/showfamille/{FAM_NUM}', 'FamilleController@showtfamille');
Route::delete('/destroyfamille/{FAM_NUM}', 'FamilleController@destroyfamille');
Route::get('/indexfamille', 'FamilleController@indexfamille');

//partie membre
Route::get('/creermembre', 'MembreController@creermembre');
Route::patch('/updatemembre/{MBR_NUM}', 'MembreController@updatemembre');
Route::post('/storemembre', 'MembreController@storemembre'); 
Route::get('/affichermembre/{MBR_NUM}', 'MembreController@affichermembre');
Route::get('/showmembre/{MBR_NUM}', 'MembreController@showtmembre');
Route::delete('/destroymembre/{MBR_NUM}', 'MembreController@destroymembre');
Route::get('/indexmembre', 'MembreController@indexmembre');

//partie periode
Route::get('/creerperiode', 'PeriodeController@creerperiode');
Route::patch('/updateperiode/{PRD_NUM}', 'PeriodeController@updateperiode');
Route::post('/storeperiode', 'PeriodeController@storeperiode'); 
Route::get('/afficherperiode/{PRD_NUM}', 'PeriodeController@afficherperiode');
Route::get('/showperiode/{PRD_NUM}', 'PeriodeController@showtperiode');
Route::delete('/destroyperiode/{PRD_NUM}', 'PeriodeController@destroyperiode');
Route::get('/indexperiode', 'PeriodeController@indexperiode');
