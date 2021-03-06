<?php

Route::group(['namespace' => 'Member', 'verify' => true], function() {
    Route::get('/', 'HomeController@index')->name('member.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('member.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('member.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('member.register');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('member.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('member.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('member.password.reset');

    // dashboard
    //profile page
    Route::post('edit', 'MemberProfileController@showChangePasswordForm')->name('member.edit');
    Route::get('edit', 'MemberProfileController@edit')->name('member.edit');
});
