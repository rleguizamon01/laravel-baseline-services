<?php

namespace App\Modules\main\ParlanteModule;

use App\Modules\main\ParlanteModule\Database\ParlanteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parlante extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    protected static function newFactory()
    {
        return ParlanteFactory::new();
    }
}
