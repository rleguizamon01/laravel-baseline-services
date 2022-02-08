<?php

use Illuminate\Support\Facades\Route;

//Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::prefix('orders')->group(function() {
        include('App\Modules\main\OrderModule\orders-routes.php');
    });

    Route::prefix('sellers')->group(function() {
        include('App\Modules\SellerModule\seller-routes.php');
    });

//});
