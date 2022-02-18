<?php

namespace App\Modules\main\OrderModule\Database;

use App\Modules\main\OrderModule\Order;
use Database\Seeders\BaseSeeder;

class OrderSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        Order::factory()->count(5)->create();
    }
}
