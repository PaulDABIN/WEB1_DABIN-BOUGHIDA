<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//les routes permettent de charger des controller ou des views quand on rentre
//des mots précis dans l'url

Route::group(['middleware' => ['web']], function () {

    //route pour la page d'arrivée
    Route::get('/', function () {
        return view('welcome');
    });

    //route pour la connection
    Route::resource('/user', 'UserController');

    //route pour le formulaire de contact
    Route::resource('/contact', 'ContactController');

    //route pour la connection
    Route::get('/home', 'HomeController@index');

    //route pour l'afficha des articles
    Route::resource('/articles','PostController');

    //route pour la gestion des projets
    // ne fonctionne pas
    Route::resource('/projet', 'ProjetController');

    //route pour l'affichage des afficher un projet de l'utilisateur
    //ne fonctionne pas
    Route::get('/user/projects', 'UserController@showProjects');

    //route pour les commentaires
    //ne fonctionne pas
    Route::resource('/comments', 'CommentController');
});

