<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
    'store_id',
    'first_name',
    'last_name',
    'email',
    'address_id',
    'active',
    'create_date',
    ];
}
