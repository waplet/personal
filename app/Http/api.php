<?php

Route::group(['namespace' => 'Api', 'middleware' => 'web', 'prefix' => 'api', 'as' => 'api.'], function () {
    Route::get('/portfolio', 'PortfolioController@index');
});