<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Requests\LoginAuthRequest;
use App\Modules\Auth\AuthModule\Services\UpdateAuthService;
use Symfony\Component\HttpFoundation\Response;

class UpdateAuthController extends Controller
{
    public function __construct(private UpdateAuthService $updateAuthService) {}

    public function __invoke(LoginAuthRequest $request, $id)
    {
        $updatedAuth = $this->updateAuthService->__invoke($request, $id);
        return response()->json($updatedAuth, Response::HTTP_OK);
    }
}

