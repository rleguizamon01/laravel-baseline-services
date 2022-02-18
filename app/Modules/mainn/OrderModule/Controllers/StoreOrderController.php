<?php

namespace App\Modules\main\OrderModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrderModule\Requests\StoreOrderRequest;
use App\Modules\main\OrderModule\Services\StoreOrderService;
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

