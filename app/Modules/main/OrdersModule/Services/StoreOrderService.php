<?php

namespace App\Modules\main\OrdersModule\Services;

use App\Modules\main\OrdersModule\Order;

class StoreOrderService extends CommonOrderService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return Order::create(['name' => $request->name]);
    }
}
