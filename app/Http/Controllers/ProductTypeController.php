<?php
namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller {

    public function __invoke(Request $request)
    {
        $productTypes = ProductType::all();

        if ($request->query('name') !== null) {
            $productTypes = $productTypes->where('name', $request->query('name'));
        }
        return response()->json($productTypes);
    }
}
