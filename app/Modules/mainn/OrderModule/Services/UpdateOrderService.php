<?php

namespace App\Modules\main\OrderModule\Services;

use App\Modules\main\OrderModule\Order;

class UpdateOrderService extends CommonOrderService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update([
            'name' => $request->name
        ]);

        return $order;
    }
}
