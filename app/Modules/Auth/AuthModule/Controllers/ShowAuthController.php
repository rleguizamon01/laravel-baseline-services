<?php

namespace App\Modules\Auth\AuthModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\AuthModule\Services\ShowAuthService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShowAuthController extends Controller
{
    public function __construct(private ShowAuthService $showAuthService) {}

    public function __invoke(Request $request, $id)
    {
        $auth = $this->showAuthService->__invoke($request, $id);
        return response()->json($auth, Response::HTTP_OK);
    }
}
