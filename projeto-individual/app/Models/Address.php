<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'street',
        'street_number',
        'city',
        'state',
        'postal_code',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
