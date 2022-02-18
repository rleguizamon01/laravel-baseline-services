<?php

namespace App\Modules\Main\UserModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\UserModule\Requests\UpdateUserRequest;
use App\Modules\Main\UserModule\Services\UpdateUserService;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserController extends Controller
{
    public function __construct(private UpdateUserService $updateUserService) {}

    public function __invoke(UpdateUserRequest $request, $id)
    {
        $updatedUser = $this->updateUserService->__invoke($request, $id);
        return response()->json($updatedUser, Response::HTTP_OK);
    }
}

