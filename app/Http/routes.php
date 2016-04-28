<?php

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