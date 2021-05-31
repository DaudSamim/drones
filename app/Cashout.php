<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cashout extends Model
{

    protected $fillable = [
        'id', 'user_id', 'product_id','amount',
    ];
}
