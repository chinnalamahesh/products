<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductAttribute;
use App\ProductAttributeValues;
use Redirect;
use DB;
use App\Combinations;
use App\User;


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
            $product->save();
            $url = url('products');
            return Redirect::to($url);

}

	public function getAllProducts()
	{
			$showProduct = Product::all();
			return view('all-products', compact('showProduct'));
	}


  public function getEditProducts(Request $request, $id)
  {
            $editProduct = Product::whereId($id)->get();

            return view('edit-products', compact('editProduct'));
  }

  public function updateProduct(Request $request)
  {
            $id=$request->get('id');
            $editProduct = Product::find($id);           
            $editProduct->name        = $request->get('name');
            $editProduct->price       = $request->get('price');
            $editProduct->description = $request->get('description');
            $editProduct->save();
            return Redirect::to('products');
  }

public function deleteProduct()
{
    $deleteProduct = Product::find($id);
    $deleteProduct->delete();
    return redirect()->to('products');
}
	public function getGenerators(Request $request, $id)
	{ 
		$generators = Product::whereId($id)->get();
		$attributes = Product::find($id)->attributes;
    $gen = ProductAttribute::pluck('attr_name','att_id')->toArray();

		$attributes->pluck('att_type_id');

		return view('generators',compact('generators','attributes','gen'));
	}

	public function generators(Request $request, $id)
	{
		$generators = Product::whereId($id)->get();
		$generatorsId = $generators->pluck('id'); // gets id of the product
		$afterGeneration  =  $request->get('text');//gets the value of selected size
		/*$attributes = ProductAttribute::find('att_id',$afterGeneration);
		return $attributes;*/
		/*$attributes->pluck('att_type_id');*/

		$afterGenerationId = explode(',', $afterGeneration);
		 $attributeId = ProductAttribute::whereIn('att_id',$afterGenerationId)->get();
		 $attributeIdValue =  $attributeId->pluck('attr_name');
		 $attributeIdValueId =  $attributeId->pluck('att_id');
		 $valueOfAttribute = ProductAttributeValues::whereIN('att_id',$attributeIdValueId)->get();
		 $combination = Combinations::whereProductId([1,2])->get();
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

public function getArray(Request $request)
	{ 
		$generators = Product::whereId(1)->get();
		$attributes = Product::find(1)->attributes;
		$attributes->pluck('att_type_id');
		return view('generators',compact('generators','attributes'));
	}

  public function postArray(Request $request)
  {
  	$array = new ProductAttribute;
  	$array->attr_name = array_map('intval', explode(',', $request->get('text')));
  	return $array;
  	$array->save();
  }

  public function getValues()
  {
  	/*$record = ProductAttributeValues::find(1);
  	return unserialize($record->pro_att_value);
$recordValue  = unserialize($record->pro_a);
return $recordValue;*/

		$record = ProductAttributeValues::whereIn('avid',[1,6])->get();
		$rec = $record->pluck('pro_att_value');
		return $rec;
  }

  public function insert()
  {
  	ProductAttribute::create([

  		'topics' => Input::get('selects')
  	]);
  }

  public function view()
  {
  	$view = ProductAttribute::where('att_id', '=' , 1)->get();
  	return $view;
  }

}