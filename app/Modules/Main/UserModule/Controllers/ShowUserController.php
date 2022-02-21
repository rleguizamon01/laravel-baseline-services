<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Services\ShowUserService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    public function __construct(private ShowUserService $showUserService) {}

    public function __invoke(Request $request, $id)
    {
        $user = $this->showUserService->__invoke($request, $id);
        return response()->json($user, Response::HTTP_OK);
    }
}
