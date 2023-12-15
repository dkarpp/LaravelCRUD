<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class ProductsGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {


            $products = Product::all();

            return response()->json($products);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error retreiving products. '], Response::HTTP_BAD_REQUEST);
        }

    }
}