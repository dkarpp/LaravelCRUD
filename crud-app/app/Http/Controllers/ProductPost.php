<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use Faker\Factory;
use \App\Models\Validators\ProductValidator;

class ProductPost extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        if (!$request->has('image')) {
            $faker = Factory::create();
            $randomImage = $faker->imageUrl(640, 480, 'animals', true);
            $request->merge(['image' => $randomImage]);
        }

        try {

            $data = $request->all();
            $validatedData = ProductValidator::validate($data);
            $product = Product::create($validatedData);

            return response()->json(['product' => $product], Response::HTTP_CREATED);

        } catch (\Exception $e) {

            return response()->json(['error' => 'Error adding product.'], Response::HTTP_BAD_REQUEST);
        }


    }
}