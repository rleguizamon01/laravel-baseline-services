<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Requests\LoginAuthRequest;
use App\Modules\Auth\AuthModule\Services\LoginAuthService;
use Symfony\Component\HttpFoundation\Response;

class LoginAuthController extends Controller
{
    public function __construct(private LoginAuthService $loginAuthService) {}

    public function __invoke(LoginAuthRequest $request)
    {
        $token = $this->loginAuthService->__invoke($request);
        return response()->json($token, Response::HTTP_NO_CONTENT);
    }
}

