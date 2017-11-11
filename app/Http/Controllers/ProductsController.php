<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductAttribute;
use App\ProductAttributeValues;
use Redirect;
use DB;



class OriginalProductsController extends Controller
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
           /* $productAtt = new ProductAttribute;
            $productAtt->attr_name = Product::whereId($id)->first();
            return $productAtt->attr_name;*/
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
		$attributes->pluck('att_type');
		/*$comp = Product::select(DB::raw("CONCAT('attr_name','att_type') AS ID"))->get();
		return $comp;*/
		/*$attributeValue  = ProductAttributeValues::find(1)->products;*/
		/*return $attributes;*/
		/*$value = ProductAttribute::find($id)->values;
		return $value;*/
		return view('generators',compact('generators','attributes'));
	}

	public function generators(Request $request, $id)
	{
		$afterGeneration  =  $request->get('text');//gets the value of selected size
		$afterGenerationId = explode(',', $afterGeneration);
		$attributeId = ProductAttribute::whereIn('att_id',$afterGenerationId)
		->get();
		$attributeIdValue =  $attributeId->pluck('attr_name');
		$attributeIdValueId =  $attributeId->pluck('att_id');
		$valueOfAttribute = ProductAttributeValues::whereIN('att_id',$attributeIdValueId)->get();
		/*return $valueOfAttribute;
		$attributeValues = ProductAttributeValues::where('product_att_id',[1,5])->get();*/
		
		return view('final',compact('attributeId','attributes' ,'$valueOfAttribute'));
	}

}