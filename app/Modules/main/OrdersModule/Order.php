<?php

namespace App\Modules\main\OrdersModule;

use App\Modules\main\OrdersModule\Database\OrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected static function newFactory()
    {
        return OrderFactory::new();
    }
}
