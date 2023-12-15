<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use \App\Models\Validators\ProductUpdateValidator;

class ProductPut extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {

            $data = $request->all();
            $validatedData = ProductUpdateValidator::validate($data);

            if (count($validatedData) <= 1) {
                return response()->json(['error' => 'Must pass something to update!'], Response::HTTP_BAD_REQUEST);
            }

            $product = Product::findOrFail($validatedData['id']);

            if (!$product) {
                return response()->json(['error' => 'Product not found.'], Response::HTTP_BAD_REQUEST);
            }

            $product->update($validatedData);

            return response()->json(['product' => $product], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error updating product.'], Response::HTTP_BAD_REQUEST);
        }
    }
}