<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth.very_basic'], function() {
    Route::get('', function () {
        return view('user.top');
    })->name('top');

    Route::get('register','User\Auth\RegisterController@showRegistrationForm')->name('user.first_register');
    Route::post('register','User\Auth\RegisterController@register');

    // Route::get('register','TwoFactorAuthController@login_form')->name('user.register');
    // Route::post('register','TwoFactorAuthController@first_auth');

    Route::get('register/{tfa_token}','User\TwoFactorAuthController@secondRegister')->name('user.wo_factor_auth');

    Route::get('login','User\Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('login','User\Auth\LoginController@login');

    Route::group(['middleware' => 'auth:user','prefix' => 'user'], function () {
        Route::get('','User\DashboardController@index')->name('user.top');

        Route::get('profile','User\ProfileController@index')->name('user.profile');
        Route::put('profile','User\ProfileController@edit');

        Route::get('questions','User\QuestionController@index')->name('user.questions');

        Route::get('question','User\QuestionController@detail')->name('user.question_detail');


        Route::get('logout','User\Auth\LoginController@logout')->name('user.logout');
    });
});