<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:passport'], function() {

    include('routes/ApiModules/auth.php');
    include('routes/ApiModules/main.php');
    include('routes/ApiModules/public.php');
});
