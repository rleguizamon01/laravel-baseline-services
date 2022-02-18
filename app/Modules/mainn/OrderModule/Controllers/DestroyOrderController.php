<?php

namespace App\Modules\main\OrderModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrderModule\Services\DestroyOrderService;
use Symfony\Component\HttpFoundation\Response;

class DestroyOrderController extends Controller
{
    public function __construct(private DestroyOrderService $destroyOrderService) {}

    public function __invoke($id)
    {
        $this->destroyOrderService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

