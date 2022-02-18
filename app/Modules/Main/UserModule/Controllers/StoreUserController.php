<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Requests\StoreUserRequest;
use App\Modules\Main\UserModule\Services\StoreUserService;
use Symfony\Component\HttpFoundation\Response;

class StoreUserController extends Controller
{
    public function __construct(private StoreUserService $storeUserService) {}

    public function __invoke(StoreUserRequest $request)
    {
        $newUser = $this->storeUserService->__invoke($request);
        return response()->json($newUser, Response::HTTP_CREATED);
    }
}

