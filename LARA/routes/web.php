<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArianeControllers;

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

/*Route::get('/', function () {
    return view('welcome',[
        'name'=>'Ariane'
    ]);
});*/


Route::group(['namespace'=>'\App\Http\Controllers'], function (){
    Route::get('/etudiants', 'ArianeController@afficherDonnees');
    Route::get('/donnees/supprimer/{id}', 'ArianeController@supprimerDonnee')->name('donnees.supprimer');
    Route::get('/donnees/editer/{id}','ArianeController@editerDonnee')->name('donnees.editer');
    Route::post('/donnees/mettre_a_jour/{id}','ArianeController@mettreAJourDonnee')->name('donnees.mettre_a_jour');
    Route::get('/donnees/details/{id}','ArianeController@afficherDetails')->name('donnees.details');

    Route::get('/', 'ArianeController@index')->name('home');
    //Route::get('/home', 'ArianeController@home')->name('home');
    Route::get('/decouvrir', 'ArianeController@discover')->name('decouvrire');
    Route::get('/african', 'ArianeController@african')->name('african');
    Route::get('/european', 'ArianeController@european')->name('european');
    Route::get('/commande', 'ArianeController@commande')->name('commande');



    Route::get('register', 'ArianeController@create')->name('get_register');
    Route::post('register', 'ArianeController@store')->name('post_register');

});
