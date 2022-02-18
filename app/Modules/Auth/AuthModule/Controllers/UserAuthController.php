<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Services\UserAuthService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuthController extends Controller
{
    public function __construct(private UserAuthService $userAuthService) {}

    public function __invoke(Request $request)
    {
        $auths = $this->userAuthService->__invoke($request);
        return response()->json($auths, Response::HTTP_OK);
    }
}
