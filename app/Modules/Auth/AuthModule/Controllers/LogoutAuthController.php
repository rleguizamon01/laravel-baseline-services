<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Services\LogoutAuthService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoutAuthController extends Controller
{
    public function __construct(private LogoutAuthService $logoutAuthService) {}

    public function __invoke(Request $request)
    {
        $this->logoutAuthService->__invoke($request);
        return response()->json(null, Response::HTTP_OK);
    }
}
