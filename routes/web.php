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


Route::get('/', 'Welcome@index')->name('welcome');

Route::group(['middleware' => 'admin'], function()
{
	Route::get('/bonjour/{reponse?}', 'Admin@index')->name('admin');
    
});


Route::group(['middleware' => 'auth'], function()
{
	Route::resource('cart', 'CartController');
	//Route::get('/checkout/{client_id?}/{reponse?}','CartController@checkout')->name('checkout');
	Route::get('/checkout','CartController@checkout')->name('checkout');

	Route::delete('emptyCart', 'CartController@emptyCart');
	Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

	Route::resource('wishlist', 'WishlistController');
	Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
	Route::post('switchToCart/{id}', 'WishlistController@switchToCart');
	
    
});

Route::get('/connexion','Welcome@connexionPage')->name('connexion');

Route::get('/notPage','Welcome@notPage')->name('notPage');

Route::get('/inscription', [
	'as' => 'inscriptionPage',
	'uses' => 'Welcome@inscriptionPage'
]);

Route::get('/liste-de-produits', [
	'as' => 'produits',
	'uses' => 'Welcome@produits'
]);

Route::get('/produits-page/{slug}', [
	'as' => 'show',
	'uses' => 'Welcome@show'
]);

Route::get('/produits-de-la-categories/{name}', [
	'as' => 'produitCat',
	'uses' => 'Welcome@produitCat'
]);

Route::get('/produits-de-la-type-bouteille/{namecat}', [
	'as' => 'typbPage',
	'uses' => 'Welcome@typbPage'
]);
Route::get('/produits-de-la-distributeurs/{namecat}', [
	'as' => 'distributeurPage',
	'uses' => 'Welcome@distributeurPage'
]);

Route::post('/recherche', 'Welcome@search')->name('search');


// Route Admin ---



//Route client ---
Route::get('/inscription-wi', [
	'as' => 'inscription-client',
	'uses' => 'Welcome@inscriptionClient'
]);

Route::post('/storeClient', [
	'as' => 'enregistrement-client',
	'uses' => 'Welcome@storeClient'
]);

// Route panier ---

Route::post('/pdf', [
	'as' => 'test-pdf',
	'uses' => 'CartController@printPDF'
]);


Route::post('/sendmail','CartController@sendmail');


Route::post('/send-mail2', [
	'as' => 'envois-de-mail2',
	'uses' => 'CartController@send_mail2'
]);

Route::get('qui_nous_sommes', 'Welcome@apropos')->name('apropos');

Route::resource('showCategories', 'Welcome@showCategories');


Route::get('/nouvellecategorie', [
	'as' => 'addcateg',
	'uses' => 'Admin@addcateg'
]);

Route::post('/ajouterdecategorie', [
	'as' => 'addcategorie',
	'uses' => 'Admin@storecateg'
]);

Route::get('/nouvellemutuelle', [
	'as' => 'addmutuelle',
	'uses' => 'Admin@addmutuelle'
]);

Route::get('ajax_souscategorie','Admin@ajax_souscategorie');

Route::post('/tratementaddmut', [
	'as' => 'addmut',
	'uses' => 'Admin@addmut'
]);


Route::get('/disponible/{id}', [
	'as' => 'dispo',
	'uses' => 'Admin@dispo'
]);

Route::get('/indisponible/{id}', [
	'as' => 'indispo',
	'uses' => 'Admin@indispo'
]);

Route::get('/listedescommandes', [
	'as' => 'commande',
	'uses' => 'Admin@showcommandes'
]);
// Route --Gestion de stocks
Route::get('/commandeDetail/{id}',[
    'as' => 'commandeDetail',
    'uses' => 'GestionStockController@commandeDetail'
]);

Route::post('affectationlivreurcommande',[
    'as'=>'affectationlivreurcommande',
    'uses'=>'GestionStockController@affectationLivreur'
]);

Route::put('livraison/{id}',[
    'as'=>'livraison',
    'uses'=>'GestionStockController@livraison'
]);
// route produits --

Route::get('/supprimerleproduits/{id}', [
	'as' => 'delete',
	'uses' => 'Admin@delete'
]);

Route::get('/editeleproduits/{id}', [
	'as' => 'edite',
	'uses' => 'Admin@edite'
]);

Route::get('/editeimageproduits/{id}', [
	'as' => 'editeImage',
	'uses' => 'Admin@editeImage'
]);

Route::get('/listedesproduits', [
	'as' => 'tableaudebord',
	'uses' => 'Admin@ShowProd'
]);

Route::get('/ajouterunproduits', [
	'as' => 'addproduits',
	'uses' => 'Admin@addprod'
]);

Route::post('/miseajourimage/{id}', [
	'as' => 'updateImage',
	'uses' => 'Admin@updateImage'
]);

Route::post('/miseajour/{id}', [
	'as' => 'update',
	'uses' => 'Admin@update'
]);

Route::post('/tratementaddproduits', [
	'as' => 'stors',
	'uses' => 'Admin@stors'
]);


// route categorie --

Route::get('/editedecategorie/{id}', [
	'as' => 'editeCat',
	'uses' => 'Admin@editeCat'
]);

Route::get('/supprimerlacategrie/{id}', [
	'as' => 'deleteCat',
	'uses' => 'Admin@deleteCat'
]);

Route::post('/miseajourdelacategorie/{id}', [
	'as' => 'updateCat',
	'uses' => 'Admin@updateCat'
]);


// route sous-categorie --

Route::get('/supprimerlasouscategrie/{id}', [
	'as' => 'deleteScat',
	'uses' => 'Admin@deleteScat'
]);

Route::get('souscategorie{id}', 'Adminr@getSouscategorie');

Route::get('/souscategorie', [
	'as' => 'addsouscategorie',
	'uses' => 'Admin@addsouscateg'
]);

Route::post('/storesouscateg', [
	'as' => 'storesouscateg',
	'uses' => 'Admin@storesouscateg'
]);

Route::get('/editedelasouscategorie/{id}', [
	'as' => 'editeScat',
	'uses' => 'Admin@editeScat'
]);

Route::post('/mise-a-jour-de-la-sous-categorie/{id}', [
	'as' => 'updateScat',
	'uses' => 'Admin@updateScat'
]);


//



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
// Route parametre template

Route::get('/Ajouter-les-slides', [
	'as' => 'addslide',
	'uses' => 'Admin@addslide'
]);

Route::get('/Ajouter-des-publicites', [
	'as' => 'addpub',
	'uses' => 'Admin@addpub'
]);


Route::get('A_propoos_de_nous', 'Welcome@apropos');

Route::get('Nous_joindre', 'Welcome@contact');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
