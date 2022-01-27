<?php

namespace App\Modules\main\OrdersModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrdersModule\Requests\StoreOrderRequest;
use App\Modules\main\OrdersModule\Services\StoreOrderService;
use Symfony\Component\HttpFoundation\Response;

class StoreOrderController extends Controller
{
    public function __construct(private StoreOrderService $storeOrderService) {}

    public function __invoke(StoreOrderRequest $request)
    {
        $newOrder = $this->storeOrderService->__invoke($request);
        return response()->json($newOrder, Response::HTTP_CREATED);
    }
}

