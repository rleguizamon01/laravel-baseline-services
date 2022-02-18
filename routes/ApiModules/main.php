<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function() {
    include('App\Modules\Main\UserModule\user-routes.php');
});
