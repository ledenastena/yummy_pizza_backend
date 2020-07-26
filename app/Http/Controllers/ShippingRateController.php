<?php
namespace App\Http\Controllers;

use App\ShippingRate;
use Illuminate\Http\Request;

class ShippingRateController extends Controller {

    public function __invoke(Request $request)
    {
        $shippingRate = ShippingRate::all();

        
        return response()->json($shippingRate);
    }
}
