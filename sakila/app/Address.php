<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
    'address',
    'address2',
    'distric',
    'city_id',
    'postal_code',
    'phone',
    ];
}
