<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValues extends Model
{

protected $table = 'products_attributes_values';
protected $primaryKey = 'avid';

public function products()
{
	return $this->hasMany('App\ProductAttributeValues', 'avid');
	
}


}
