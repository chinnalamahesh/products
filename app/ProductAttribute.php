<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'products_attributes';
    protected $primaryKey = 'att_id';

    public function values()
    {
    	return $this->hasMany('App\ProductAttributeValues','avid');
    }

     protected $casts = [
        'selects' => 'array',
    ];
}
