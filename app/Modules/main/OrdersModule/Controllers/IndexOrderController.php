<?php

namespace App\Modules\main\OrdersModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrdersModule\Services\IndexOrderService;
use Symfony\Component\HttpFoundation\Response;

class IndexOrderController extends Controller
{
    public function __construct(private IndexOrderService $indexOrderService) {}

    public function __invoke($request = null)
    {
        $orders = $this->indexOrderService->__invoke($request);
        return response()->json($orders, Response::HTTP_OK);
    }
}

