<?php

namespace App\Services;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BaseService
{
    protected function logErrors(Closure $callback, bool $needsTransaction = false)
    {
        try {
            if($needsTransaction)
                return DB::transaction($callback);
            else
                return $callback();
        } catch (\Throwable $throwable) {
            Log::error("A '{$throwable->getCode()}' error occurred in " . get_class($this) . ": {$throwable->getMessage()}");
            throw $throwable;
        }
    }
}
