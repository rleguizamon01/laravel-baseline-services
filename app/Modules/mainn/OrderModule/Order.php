<?php

namespace App\Modules\main\OrderModule;

use App\Modules\main\OrderModule\Database\OrderFactory;
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
