<?php

    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        // Login
        Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@index']);
        Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@authenticate']);

        // Logout
        Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@logout']);

        // Esqueci minha senha
        Route::get('forget-password', ['as' => 'forget_password', 'uses' => 'Auth\ForgetPasswordController@index']);
        Route::get('password/reset/{token?}', ['as' => 'password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
        Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
        Route::post('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\PasswordController@reset']);
    });