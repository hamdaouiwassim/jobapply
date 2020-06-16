<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomePagesController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomePagesController@about')->name('about');
Route::get('/blog', 'HomePagesController@blog')->name('blog');
Route::get('/contact', 'HomePagesController@contact')->name('contact');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/societe/complete', 'SocietesController@complete')->name('completesociety');
    Route::post('/societe/modify', 'SocietesController@modify')->name('modifysociety');
    Route::get('/societe/offer/add', 'OffersController@create')->name('addOffer');
    Route::post('/societe/addOfferToDb', 'OffersController@store')->name('addOfferToDb');
    Route::get('/societe/offers', 'OffersController@index')->name('offers');
    Route::get('/offer/{id}/show', 'OffersController@show')->name('showOffer');
    Route::get('/condidate/offers', 'OffersController@indexCondidates')->name('offersCondidates'); 
    Route::get('/condidate/offers/{tags}', 'OffersController@tagsOffersCondidates')->name('tagsOffersCondidates');  
    Route::get('/condidate/mescondidatures', 'CondidaturesController@condidaturesCondidates')->name('mescondidatures');
    Route::post('/condidate/offers/search', 'OffersController@CondidatesSearchoffers')->name('offersCondidatesSearch');
    Route::get('/category/add', 'CategoriesController@create')->name('categoryCreate');  
    Route::get('/condidature/{id}', 'CondidaturesController@create')->name('condidatureCreate');
    Route::get('/stagaire/mesdemandes', 'StagairesController@mesdemandes')->name('mesdemandes');
    Route::get('/stagaire/{societeid}/demande', 'StagairesController@createDemande')->name('createDemande');
    Route::post('/stagaire/demande/add', 'StagairesController@storeDemande')->name('storeDemande');
    Route::post('/offre/postuler', 'CondidaturesController@store')->name('condidatureStore');
    Route::get('/societe/{id}', 'SocietesController@profileSociete')->name('profileSociete');
    Route::get('/societes/all', 'SocietesController@AllSocieties')->name('SocieteAll');
    Route::post('/stagaire/add','StagairesController@StagaireStore')->name('StagaireStore');

});
