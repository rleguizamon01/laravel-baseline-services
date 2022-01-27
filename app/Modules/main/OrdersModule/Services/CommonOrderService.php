<?php

namespace App\Modules\main\OrdersModule\Services;

use App\Services\BaseService;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CommonOrderService extends BaseService
{
    protected array $relations = [];
}
