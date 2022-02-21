<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Services\DestroyUserService;
use Symfony\Component\HttpFoundation\Response;

class DestroyUserController extends Controller
{
    public function __construct(private DestroyUserService $destroyUserService) {}

    public function __invoke($id)
    {
        $this->destroyUserService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

