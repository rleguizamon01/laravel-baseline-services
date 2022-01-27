<?php

namespace App\Modules\main\OrdersModule\Database;

use App\Modules\main\OrdersModule\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
