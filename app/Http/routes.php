<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('tt', ['as' => 'tt', function(){

    $user = \App\User::first();
    $gender = \App\Gender::first();
    $movie = \App\Movie::first();

    $movie->load('gender');

    dump($user);
    dump($gender);
    dump($movie);

}]);

Route::auth();

Route::get('/',
           [
               'as' => 'home',
               'uses' => 'AppController@lists'
           ]
);

Route::get('/contact',
           [
               'as' => 'contact',
               'uses' => 'AppController@contact'
           ]
);

Route::post('/submitcontact',
           [
               'as' => 'submit.contact',
               'uses' => 'AppController@submitcontact'
           ]
);

Route::get('/dashboard',
           [
               'as' => 'user.dashboard',
               'uses' => 'UserController@index',
           ]
);

Route::get('/movie/create',
           [
               'as' => 'movie.create',
               'uses' => 'MovieController@create',
               'middleware' => 'auth'
           ]
);

Route::post('/movie/create',
           [
               'as' => 'movie.store',
               'uses' => 'MovieController@store',
               'middleware' => 'auth'
           ]
);

Route::get('/movie/edit/{id}',
           [
               'as' => 'movie.edit',
               'uses' => 'MovieController@edit',
               'middleware' => 'auth'
           ]
);

Route::post('/movie/edit/{id}',
           [
               'as' => 'movie.update',
               'uses' => 'MovieController@update',
               'middleware' => 'auth'
           ]
);

Route::get('/movie/delete/{id}',
           [
               'as' => 'movie.delete',
               'uses' => 'MovieController@delete',
               'middleware' => 'auth'
           ]
);

Route::get('movie/{id}/{slug?}',
           [
               'as' => 'movie.show',
               'uses' => 'MovieController@show'
           ]
);



