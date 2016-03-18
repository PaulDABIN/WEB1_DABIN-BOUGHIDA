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

Route::group(['middleware' => ['web']], function () {
    /**
    Route::get('/contact', function() {
        return 'page contact';
    });

    Route::get('/articles', function(){
        return 'Mes articles:';
    });

    Route::get('/articles/create', function() {
        return view('articles.create');
    });

    Route::delete('/articles/{id}', function($id){
       //Code pour supprimer un article
    });

    Route::post('/articles', function(Request $request) {
        dd($request->all());
    });

    Route::get('/articles/{id}', function($id){
        return 'Article n°'.$id;
    });
     */
    //Route::get('/profil/{id}', 'UserController@show')->where('id', '[0-9]+');
/*
    Route::resource('/articles', 'PostController');

    Route::get('/projet/create', function() {
        return view('projet.create');
    });

    Route::get('/contact', ['as' => 'page.contact', 'uses' => function() {
        return 'ok';
    }]);

    Route::auth();

    Route::get('/', function () {
        /*return view('welcome', ['id' => 100]);*/
/*
        return view ('home');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/home', 'HomeController@index');

    Route::get('/posts', function(){
        return view('posts.index');
    });*/

    //Route::post('projet', [ 'as' => 'projet', 'uses' => 'ProjetController']);
    Route::resource('/posts','PostController');
    Route::resource('/projet', 'ProjetController');
    Route::resource('/user', 'UserController');
    Route::get('/user/projects', 'UserController@showProjects');
    Route::resource('/comments', 'CommentController');
    Route::resource('/contact', 'ContactController');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('/admin', 'AdminController');
    Route::get('/home', 'HomeController@index');


});

