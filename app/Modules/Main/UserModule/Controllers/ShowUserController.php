<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Services\ShowUserService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShowUserController extends Controller
{
    public function __construct(private ShowUserService $showUserService) {}

    public function __invoke(Request $request, $id)
    {
        $user = $this->showUserService->__invoke($request, $id);
        return response()->json($user, Response::HTTP_OK);
    }
}
