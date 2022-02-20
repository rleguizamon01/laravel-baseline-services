<?php

namespace App\Modules\Auth\AuthModule\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class WrongCredentialsException extends Exception
{
    public function report()
    {
        //
    }

    public function render($request)
    {
        return response()->json([
            'message' => 'Incorrect credentials.'
        ], Response::HTTP_UNAUTHORIZED);
    }
}
