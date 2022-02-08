<?php

namespace App\Modules\main\OrderModule\Services;

use App\Modules\main\OrderModule\Order;

class ShowOrderService extends CommonOrderService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return Order::findOrFail($id);
    }
}
