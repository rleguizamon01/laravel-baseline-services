<?php

namespace App\Modules\main\OrderModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrderModule\Services\RestoreOrderService;
use Symfony\Component\HttpFoundation\Response;

class RestoreOrderController extends Controller
{
    public function __construct(private RestoreOrderService $restoreOrderService) {}

    public function __invoke($id)
    {
        $restoredOrder = $this->restoreOrderService->__invoke($id);
        return response()->json($restoredOrder, Response::HTTP_OK);
    }
}

