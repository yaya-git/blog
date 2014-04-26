<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// HOME

Route::get('/', 'HomeController@index');

// POSTS

Route::resource('posts', 'PostsController');

// LOGIN

Route::get('login', 'LoginController@index');

Route::post('login', 'LoginController@login');

Route::get('logout', 'LoginController@logout');


// ACCOUNT
Route::group(array('before' => 'auth'), function()
{    
    
    Route::get('account', 'AccountController@index');
    
});


// Para relacionar dos modelos relacionados en las rutas

//Route::resource('lessons.tag', 'LessonsTagsController');


