<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Services\LogoutAuthService;
use Symfony\Component\HttpFoundation\Response;

class LogoutAuthController extends Controller
{
    public function __construct(private LogoutAuthService $logoutAuthService) {}

    public function __invoke($id)
    {
        $restoredAuth = $this->logoutAuthService->__invoke($id);
        return response()->json($restoredAuth, Response::HTTP_OK);
    }
}
