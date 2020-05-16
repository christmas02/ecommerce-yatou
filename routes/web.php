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

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'Welcome@index'
]);

Route::get('/produits-page/{slug}', [
	'as' => 'show',
	'uses' => 'Welcome@show'
]);

Route::get('/produits-de-la-categories/{name}', [
	'as' => 'produitCat',
	'uses' => 'Welcome@produitCat'
]);

Route::get('/produits-de-la-souscategories/{name}', [
	'as' => 'produitScat',
	'uses' => 'Welcome@produitScat'
]);

Route::post('/recherche', 'Welcome@search')->name('search');


// Route Admin ---

Route::get('/bonjour', [
	'as' => 'welcome-to-the-admin-interface',
	'uses' => 'Admin@index'
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

Route::resource('cart', 'CartController');
Route::get('/checkout','CartController@checkout')->name('checkout');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route parametre template

Route::get('/Ajouter-les-slides', [
	'as' => 'addslide',
	'uses' => 'Admin@addslide'
]);

Route::get('/Ajouter-des-publicites', [
	'as' => 'addpub',
	'uses' => 'Admin@addpub'
]);













