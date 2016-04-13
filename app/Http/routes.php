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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [
        'as'   => 'home',
        'uses' => 'PagesController@home'
    ]);

    Route::get('/about', [
        'as'   => 'about',
        'uses' => 'PagesController@about'
    ]);


/*
    
    Route::get('/contacto', function() {
		return redirect('/#contacto');
	});
*/
	Route::get('/contacto', [
    	'as'   => 'contacto',
        'uses' => 'EmailController@mostrarForm'
    ]);
    Route::post('/contacto', 'EmailController@enviarEmail');


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'PagesController@home');
    Route::get('/admin/home', [
        'as' => 'admin.home', 
        'uses' => 'AdminController@home']);
});
