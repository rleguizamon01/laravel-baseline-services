<?php

namespace App\Modules\main\OrderModule\Services;

use App\Modules\main\OrderModule\Order;

class StoreOrderService extends CommonOrderService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return Order::create([]);
    }
}
