<?php
/*
namespace App\Modules\mainn\OrdersModule\Services;

use App\Modules\mainn\OrdersModule\Order;

class PaginateOrderService extends CommonOrderService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->paginate($request));
    }

    private function paginate($request)
    {
        $orders = Order::query();

        if($request->has('relations'))
            $orders->with($request->relations);
        else
            $orders->with($this->relations);

        if($request->has('search_column'))
            $orders->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $orders->orderBy($request->order_by, $request->order_direction);

        return $orders->paginate($request->page_size ?? 15);
    }
}
*/
