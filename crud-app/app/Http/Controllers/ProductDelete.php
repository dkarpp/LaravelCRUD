<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class ProductDelete extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {


        try {

            $productId = $request->route('id');

            if (!is_numeric($productId)) {
                return response()->json(['error' => 'Product ID must be an integer.'], Response::HTTP_BAD_REQUEST);
            }

            if (!$productId) {
                return response()->json(['error' => 'Product ID is required.'], Response::HTTP_BAD_REQUEST);
            }

            $product = Product::find($productId);

            if (!$product) {
                return response()->json(['error' => 'Product not found.'], Response::HTTP_NOT_FOUND);
            }

            $productName = $product->name;

            $product->delete();

            return response()->json(['message' => "$productName has been deleted successfully."], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error deleting product.'], Response::HTTP_BAD_REQUEST);
        }

    }
}