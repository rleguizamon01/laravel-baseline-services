<?php

namespace App\Modules\Auth\AuthModule\Exceptions;

use Exception;

class WrongCredentialsException extends Exception
{
    public function report()
    {
        //
    }

    public function render($request)
    {
        return response()->json([
            'message' => 'Credenciales incorrectas.'
        ]);
    }
}
