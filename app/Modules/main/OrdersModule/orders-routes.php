<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'App\Modules\main\OrdersModule\Controllers\IndexOrderController@__invoke');
Route::get('{id}', 'App\Modules\main\OrdersModule\Controllers\IndexOrderController@__invoke');
Route::post('', 'App\Modules\main\OrdersModule\Controllers\StoreOrderController@__invoke');
