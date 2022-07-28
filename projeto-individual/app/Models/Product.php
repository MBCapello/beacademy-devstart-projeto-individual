<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'sex',
        'birth_date',
        'image',
        'bio',
        'available'
    ];

    public function getProduct($request = null)
    {
        $products = $this->where( function ($query) use ($request) {
            if ($request->has('search')) {
                $query->where('name', 'LIKE', "%{$request->search}%");
            }

            if ($request->has('type')) {
                $query->where('type', 'LIKE', "%{$request->type}%");
            }

            if ($request->has('sex')) {
                $query->where('sex', 'LIKE', "%{$request->sex}%");
            }
            })
        ->paginate(8);
        return $products;
    }
}
