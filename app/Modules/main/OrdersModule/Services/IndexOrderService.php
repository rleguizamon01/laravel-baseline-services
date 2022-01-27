<?php

namespace App\Modules\main\OrdersModule\Services;

use App\Modules\main\OrdersModule\Order;

class IndexOrderService extends CommonOrderService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        return Order::with($this->relations)->get();
    }
}
