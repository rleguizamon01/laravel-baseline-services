<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\UserModule\Controllers\IndexUserController@__invoke');
Route::get('/{id}', 'App\Modules\Main\UserModule\Controllers\ShowUserController@__invoke');

Route::post('/', 'App\Modules\Main\UserModule\Controllers\StoreUserController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\UserModule\Controllers\RestoreUserController@__invoke');

Route::put('/{id}', 'App\Modules\Main\UserModule\Controllers\UpdateUserController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\UserModule\Controllers\DestroyUserController@__invoke');

