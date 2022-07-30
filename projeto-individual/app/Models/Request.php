<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public function requestProduct()
    {
        return $this->hasMany(RequestProduct::class)->groupBy('product_id')

    }
}
