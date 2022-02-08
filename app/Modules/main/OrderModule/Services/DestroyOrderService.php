<?php

namespace App\Modules\main\OrderModule\Services;

use App\Modules\main\OrderModule\Order;

class DestroyOrderService extends CommonOrderService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return Order::findOrFail($id)->delete();
    }
}
