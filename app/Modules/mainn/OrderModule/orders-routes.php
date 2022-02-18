<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\main\OrdersModule\Controllers\IndexOrderController@__invoke');
Route::get('/{id}', 'App\Modules\main\OrdersModule\Controllers\ShowOrderController@__invoke');
//Route::get('/paginated/index', 'App\Modules\mainn\OrdersModule\Controllers\PaginatedOrderController@__invoke');

Route::post('/', 'App\Modules\main\OrdersModule\Controllers\StoreOrderController@__invoke');
Route::post('/{id}/restore', 'App\Modules\main\OrdersModule\Controllers\RestoreOrderController@__invoke');

Route::put('/{id}', 'App\Modules\main\OrdersModule\Controllers\UpdateOrderController@__invoke');

Route::delete('/{id}', 'App\Modules\main\OrdersModule\Controllers\DestroyOrderController@__invoke');

