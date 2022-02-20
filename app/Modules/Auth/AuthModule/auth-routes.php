<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'App\Modules\Auth\AuthModule\Controllers\LoginAuthController@__invoke');
Route::post('register', 'App\Modules\Auth\AuthModule\Controllers\RegisterAuthController@__invoke');

Route::group(['prefix' => 'auth', 'middleware' => 'auth:api'], function() {
    Route::get('user', 'App\Modules\Auth\AuthModule\Controllers\UserAuthController@__invoke');
    Route::post('logout', 'App\Modules\Auth\AuthModule\Controllers\LogoutAuthController@__invoke');
});

