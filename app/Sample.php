<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
   protected $casts = [
        'shifts' => 'array'
    ];
}
