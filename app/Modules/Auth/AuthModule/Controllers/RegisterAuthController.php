<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Requests\RegisterAuthRequest;
use App\Modules\Auth\AuthModule\Services\RegisterAuthService;
use Symfony\Component\HttpFoundation\Response;

class RegisterAuthController extends Controller
{
    public function __construct(private RegisterAuthService $registerAuthService) {}

    public function __invoke(RegisterAuthRequest $request)
    {
        $newUser = $this->registerAuthService->__invoke($request);
        return response()->json($newUser, Response::HTTP_CREATED);
    }
}

