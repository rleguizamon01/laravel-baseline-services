<?php

namespace App\Modules\main\OrderModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrderModule\Requests\UpdateOrderRequest;
use App\Modules\main\OrderModule\Services\UpdateOrderService;
use Symfony\Component\HttpFoundation\Response;

class UpdateOrderController extends Controller
{
    public function __construct(private UpdateOrderService $updateOrderService) {}

    public function __invoke(UpdateOrderRequest $request, $id)
    {
        $updatedOrder = $this->updateOrderService->__invoke($request, $id);
        return response()->json($updatedOrder, Response::HTTP_OK);
    }
}

