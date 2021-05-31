<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estcashout extends Model
{

    protected $fillable = [
        'id', 'product_id','amount',
    ];
}
