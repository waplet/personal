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
    Route::get('auth/logout', 'Auth\AuthController@logout');

    // Registration routes...
    // Disabled by now
    //Route::get('auth/register', 'Auth\AuthController@getRegister');
    //Route::post('auth/register', 'Auth\AuthController@postRegister');
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('dashboard', 'DashboardController@index');

    /** Products */
    Route::get('/product/create', 'ProductController@createAction');
    Route::post('/product/create', 'ProductController@postCreateAction');
    Route::get('/product/list', 'ProductController@listAction');

    // temporary
    Route::get('/charts', function()
    {
        return View::make('admin.mcharts');
    });

    Route::get('/tables', function()
    {
        return View::make('admin.table');
    });

    Route::get('/forms', function()
    {
        return View::make('admin.form');
    });

    Route::get('/grid', function()
    {
        return View::make('admin.grid');
    });

    Route::get('/buttons', function()
    {
        return View::make('admin.buttons');
    });


    Route::get('/icons', function()
    {
        return View::make('admin.icons');
    });

    Route::get('/panels', function()
    {
        return View::make('admin.panel');
    });

    Route::get('/typography', function()
    {
        return View::make('admin.typography');
    });

    Route::get('/notifications', function()
    {
        return View::make('admin.notifications');
    });

    Route::get('/blank', function()
    {
        return View::make('admin.blank');
    });

    Route::get('/login', function()
    {
        return View::make('admin.login');
    });

    Route::get('/documentation', function()
    {
        return View::make('admin.documentation');
    });

});
Route::auth();

