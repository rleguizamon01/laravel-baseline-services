<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Services\IndexUserService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexUserController extends Controller
{
    public function __construct(private IndexUserService $indexUserService) {}

    public function __invoke(Request $request)
    {
        $users = $this->indexUserService->__invoke($request);
        return response()->json($users, Response::HTTP_OK);
    }
}
