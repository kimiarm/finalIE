<?php

namespace App\Http\Controllers\Api\V1;

use App\Product ;
use App\Transformers\ProductTransformer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
                   ->join('product_colors', 'products.id', '=', 'product_colors.productID')
                   ->join('product-img', 'products.id', '=', 'product-img.productID')
                   ->select('products.*', 'product_colors.color' , 'product-img.src')
                   ->get();

        return json_encode($products) ;

    }

    public function show($id){
        return Product::findOrFail($id);
    }
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return $product;
    }

    public function destroy($id)
    {
        $product= Product::findOrFail($id);
        $product->delete();
        return '';
    }

}
