<?php

use Illuminate\Support\Facades\Route;

include('routes/ApiModules/public.php');

include('App\Modules\Auth\AuthModule\auth-routes.php');

Route::group(['middleware' => 'auth:api'], function() {
    include('routes/ApiModules/main.php');
});
