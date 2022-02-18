<?php
/*
namespace App\Modules\mainn\OrdersModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\mainn\OrdersModule\Requests\PaginateOrderRequest;
use App\Modules\mainn\OrdersModule\Services\PaginateOrderService;
use Symfony\Component\HttpFoundation\Response;

class PaginateOrderController extends Controller
{
    public function __construct(private PaginateOrderService $paginateOrderService) {}

    public function __invoke(PaginateOrderRequest $request)
    {
        $orders = $this->paginatedOrderService->__invoke($request);
        return response()->json($orders, Response::HTTP_CREATED);
    }
}

*/
