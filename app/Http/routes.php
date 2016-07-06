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


// Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
    /**
     * Frontend routes
     */
    Route::get('/', 'WelcomeController@index');
    Route::get('home', 'HomeController@index');
    Route::resource('portfolio', 'PortfolioController', []);

    /**
     * Auth routes
     */
    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin')->name('auth.login');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');

});
Route::auth();

