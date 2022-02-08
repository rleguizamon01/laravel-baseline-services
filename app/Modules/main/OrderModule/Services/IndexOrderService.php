<?php

namespace App\Modules\main\OrderModule\Services;

use App\Modules\main\OrderModule\Order;

class IndexOrderService extends CommonOrderService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $orders = Order::query();

        if($request->has('relations') && $request->relations != '*')
            $orders->with($request->relations);
        else
            $orders->with($this->relations);

        if($request->has('search_column'))
            $orders->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $orders->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            $orders->paginate($request->page_size ?? 15);
        else
            $orders->get();

        return $orders;
    }
}
