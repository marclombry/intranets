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
Route::get('/',function(){
	return view('Welcome');
});

/* Route vers le portail cego et commandes  */
Route::get('/portail/ord',function(){
	return Redirect::to('lien_fictif');
})->name('ord');

/* Route vers le portail cego et livrabilité */
Route::get('/portail/liv',function(){
	return Redirect::to('lien_fictif');
})->name('liv');

/* Route vers le portail cego  et fin de préparation    */
Route::get('/portail/epo',function(){
	return Redirect::to('lien_fictif');
})->name('epo');

/* Route vers le portail cego  et expéditions   */
Route::get('/portail/shi',function(){
	return Redirect::to('lien_fictif');
})->name('shi');

/* Route vers le portail cego  et stock   */
Route::get('/portail/sto',function(){
	return Redirect::to('lien_fictif');
})->name('sto');

/*************************************************************/

/* Route vers les ventes et CA  */
Route::get('/ventes/ca',function(){
	return Redirect::to('lien_fictif');
})->name('comparatif_ca');

/* Route vers les ventes et CA  */
Route::get('/ventes/rotation',function(){
	return Redirect::to('lien_fictif');
})->name('rotation_lentes');

/* Route vers les ventes et CA  */
Route::get('/ventes/statistique_commerciale',function(){
	return Redirect::to('lien_fictif');
})->name('statistique');

/* Route vers les ventes et CA  */
Route::get('/ventes/reliquats',function(){
	return Redirect::to('lien_fictif');
})->name('reliquats');

/*************************************************************/

/* Route vers les logistique et Catalogue plv  */
Route::get('/logistique/plv/catalogue',function(){
	return Redirect::to('lien_fictif');
})->name('catalogue_plv');

/* Route vers les logistique et portefeuille livraisons  */
Route::get('/logistique/livraisons',function(){
	return Redirect::to('lien_fictif');
})->name('livraisons');

/* Route vers les logistique et simulateure de livrabilité */
Route::get('/logistiques/simulateur/livrabilite',function(){
	return Redirect::to('lien_fictif');
})->name('simulateur_livrabilite');

/* Route vers les logistique et CA  */
Route::get('/logistique/plv/tableau_de_bord',function(){
	return Redirect::to('lien_fictif');
})->name('tableau_de_bord_plv');

/*************************************************************/

/* Route vers les informatique et Code libres  */
Route::get('/informatique/code_libres',function(){
	return Redirect::to('lien_fictif');
})->name('code_libres');

/* Route vers les informatique et comparateur cegid ego */
Route::get('/informatique/comparateur/cegid_ego',function(){
	return Redirect::to('lien_fictif');
})->name('comparateur_cegid_ego');

/* Route vers les informatique et bank */
Route::get('/informatique/bank',function(){
	return Redirect::to('lien_fictif');
})->name('bank_dzb');

/* Route vers les informatique et edi_checker */
Route::get('/informatique/developement/edi_checker',function(){
	return Redirect::to('lien_fictif');
})->name('edi_checker');

/* Route vers les informatique et documentation la bible du geek heureux  */
Route::get('/informatique/glpi',function(){
	return Redirect::to('lien_fictif');
})->name('glpi_version');

/* Route vers les informatique et documentation la bible du geek heureux  */
Route::get('/informatique/glpi1',function(){
	return Redirect::to('lien_fictif');
})->name('glpi_version1');

/* Route vers les informatique et documentation la bible du geek heureux  */
Route::get('/informatique/documentation/bible',function(){
	return Redirect::to('lien_fictif');
})->name('la_bible');

/*************************************************************/

/* Route vers les achat et  animation  */
Route::get('/achat/animations',function(){
	return Redirect::to('lien_fictif');
})->name('achat_animation');

/* Route vers les achat et previsionnel de commandes */
Route::get('/achat/previsionnel_commandes',function(){
	return Redirect::to('lien_fictif');
})->name('previsionnel_commandes');

/* Route vers les achat et suivi du seuil d'alerte */
Route::get('/achat/suivi/alerte_plv',function(){
	return Redirect::to('lien_fictif');
})->name('seuil_alerte_plv');

/*************************************************************/

/* Route vers les inventaire et  invent'r */
Route::get('/inventaire/invent_r',function(){
	return Redirect::to('lien_fictif');
})->name('invent_r');

/* Route vers les inventaire et previsionnel de commandes */
Route::get('/inventaire/limbo',function(){
	return Redirect::to('lien_fictif');
})->name('limbo');

/* Route vers les inventaire et suivi des emplacements occupé*/
Route::get('/inventaire/suivi/emplacement',function(){
	return Redirect::to('lien_fictif');
})->name('emplacement_occupe');


/*************************************************************/

/* Route vers les commun et  deb*/
Route::get('/commun/deb',function(){
	return Redirect::to('lien_fictif');
})->name('deb');

/* Route vers les commun et generateur de signature */
Route::get('/commun/generateur_signature',function(){
	return Redirect::to('lien_fictif');
})->name('generateur_signature');

/* Route vers les commun et suivi des emplacements occupé*/
Route::get('/commun/phototheque',function(){
	return Redirect::to('lien_fictif');
})->name('phototheque');

Route::get('/test',function(){
	dd('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
