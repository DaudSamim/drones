<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estcashin extends Model
{

    protected $fillable = [
        'id', 'job_id','amount',
    ];
}
