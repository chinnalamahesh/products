<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function attributes()
   {

   	return $this->hasMany('App\ProductAttribute','product_id');

   }

   public function scopeAttributeType($query)
    {
        return $query->where('att_type', '=', 1);
    }

}
