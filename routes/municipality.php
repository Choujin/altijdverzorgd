<?php

Route::group(['namespace' => 'Municipality'], function() {
    Route::get('/', 'HomeController@index')->name('municipality.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('municipality.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('municipality.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('municipality.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('municipality.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('municipality.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('municipality.password.reset');

});