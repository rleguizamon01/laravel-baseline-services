<?php

use Illuminate\Support\Facades\Route;

//Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::prefix('orders')->group(function() {
        include('App/Modules/main/OrdersModule/orders-routes.php');
    });


//});
