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
    })->name('user.top');

    Route::get('register','User\Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('register','User\Auth\RegisterController@register');

    Route::get('login','User\Auth\LoginController@showLoginForm')->name('user.login');

    // Route::group(['middleware' => 'user','prefix' => 'user'], function () {
    //     Route::get('/test',function(){
    //         return 423546;
    //     });
    // });

});