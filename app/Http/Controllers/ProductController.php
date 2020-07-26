<?php
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function __invoke(Request $request)
    {
        $products = Product::all();

        if ($request->query('product_type_id') !== null) {
            $products = $products->where('product_type_id', $request->query('product_type_id'));
        }
        return response()->json($products);
    }
}
