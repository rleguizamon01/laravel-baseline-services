<?php

namespace App\Modules\main\OrderModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\main\OrderModule\Services\ShowOrderService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowOrderController extends Controller
{
    public function __construct(private ShowOrderService $showOrderService) {}

    public function __invoke(Request $request, $id)
    {
        $order = $this->showOrderService->__invoke($request, $id);
        return response()->json($order, Response::HTTP_OK);
    }
}
