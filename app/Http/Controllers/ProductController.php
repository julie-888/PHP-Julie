<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request)
    {
       
       $products = new Product();
       $products->sales_point_id = $request->sales_point_id;
       $products->price = $request->price;
       $products->quantity = $request->quantity;
       $products->name = $request->name;
       $products->description = $request->description;
       $products->save();
       
       return response()->json($products, 201);
    }

    public function list()
    {
        $products = Product::get();
        return $products;
    }

    public function position($price)
    {
        if (empty($price))
        {
        throw new NotFoundException("price not specified!");
        }
        else
        {
            $products = Product::where('price', $price)->first();
            return $products;
        }
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product; 
    }
    public function delete($id)
    {
      Product::destroy($id);
      return 'Продукт ${id} удален';
    }
}
