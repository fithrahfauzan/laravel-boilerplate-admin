<?php

/*----------------------------------
|    Admin Authentication Routes   |
----------------------------------*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() 
{
    // login
    Route::get('login',   ['as' => 'login',        'uses' => 'AdminAuthController@showLoginForm']);
    Route::post('login',  ['as' => 'loginProcess', 'uses' => 'AdminAuthController@login']);

    // logout
    Route::post('logout', ['as' => 'logout',       'uses' => 'AdminAuthController@logout']);
});

/*----------------------------------
|           Admin Routes           |
----------------------------------*/
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function() 
{        
    Route::get('/',             ['as' => 'index',               'uses' => 'AdminController@index']);            // index
    Route::get('/dashboard',    ['as' => 'dashboard',           'uses' => 'AdminController@dashboard']);        // dashboard

});