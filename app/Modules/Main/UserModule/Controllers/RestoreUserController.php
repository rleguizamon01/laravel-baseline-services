<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Services\RestoreUserService;
use Symfony\Component\HttpFoundation\Response;

class RestoreUserController extends Controller
{
    public function __construct(private RestoreUserService $restoreUserService) {}

    public function __invoke($id)
    {
        $restoredUser = $this->restoreUserService->__invoke($id);
        return response()->json($restoredUser, Response::HTTP_OK);
    }
}
