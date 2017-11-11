<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductAttribute;
use App\ProductAttributeValues;
use Redirect;
use DB;
use App\Combinations;


class ProductsController extends Controller
{
    
public function getCreateProducts()
{
	return  view('create-products');

}

public function postCreateProducts(Request $request)
{
			$product              = new Product;
            $product->name        = $request->get('name');
            $product->price       = $request->get('price');
            $product->description = $request->get('description');
            $productAtt->save();
            $url = url('all-products');
            return Redirect::to($url);

}

	public function getAllProducts()
	{
			$showProduct = Product::all();
			return view('all-products', compact('showProduct'));
	}

	public function getGenerators(Request $request, $id)
	{ 
		$generators = Product::whereId($id)->get();
		$attributes = Product::find($id)->attributes;
		$attributes->pluck('att_type_id');
		return view('generators',compact('generators','attributes'));
	}

	public function generators(Request $request, $id)
	{

		$afterGeneration  =  $request->get('text');//gets the value of selected size
		$attributes = ProductAttribute::find($afterGeneration);
		$attributes->pluck('att_type_id');

		$afterGenerationId = explode(',', $afterGeneration);
		 $attributeId = ProductAttribute::whereIn('att_id',$afterGenerationId)
		->get();
		 $attributeIdValue =  $attributeId->pluck('attr_name');
		 $attributeIdValueId =  $attributeId->pluck('att_id');
		 $valueOfAttribute = ProductAttributeValues::whereIN('att_id',$attributeIdValueId)->get();
		 $combination = Combinations::whereProductId(1)->get();
		//$attributeValues = ProductAttributeValues::where('product_att_id',$valueOfAttribute)->get();
		
		return view('final',compact('attributeId','attributes' ,'valueOfAttribute', 'combination'));
	}

  public function getCheck()
  {
  	
  $first = DB::table('products_attributes')
            ->where('attr_name','small');
           
$users = DB::table('products_attributes')
            ->where('att_type','size')
            ->unionAll($first)
            ->get();
       
  }


  public function getEdit()
  {
  	return view('edit');
  }
}