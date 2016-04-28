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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

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


    // Route::get('/', [
    //     'as'   => 'home',
    //     'uses' => 'PagesController@home'
    // ]);

    // Route::get('/about', [
    //     'as'   => 'about',
    //     'uses' => 'PagesController@about'
    // ]);


/*
    
    Route::get('/contacto', function() {
		return redirect('/#contacto');
	});
*/
 //    Route::get('/', [
 //        'as'   => 'home',
 //        'uses' => 'PagesController@home'
 //    ]);

 //    Route::get('/about', [
 //        'as'   => 'about',
 //        'uses' => 'PagesController@about'
 //    ]);

	// Route::get('/contacto', [
 //    	'as'   => 'contacto',
 //        'uses' => 'EmailController@mostrarForm'
 //    ]);

 //    Route::post('/contacto', 'EmailController@enviarEmail');



Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'as'   => 'home',
        'uses' => 'PagesController@home'
    ]);

    Route::get('/about', [
        'as'   => 'about',
        'uses' => 'PagesController@about'
    ]);

    Route::get('/contacto', [
        'as'   => 'contacto',
        'uses' => 'EmailController@mostrarForm'
    ]);

    Route::post('/contacto', 'EmailController@enviarEmail');

    //Route::auth();
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    // Registration Routes...
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    Route::get('/home', 'PagesController@home');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('perfil', [
        'as' => 'perfil', 
        'uses' => 'PagesController@perfil']);
});

Route::group(['middleware' => ['web', 'auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('home', [
        'as' => 'admin.home', 
        'uses' => 'AdminController@home']);
    Route::resource('activity', 'ActivityController');
});