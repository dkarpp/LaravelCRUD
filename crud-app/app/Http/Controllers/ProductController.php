<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Faker\Factory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product;
        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faker = Factory::create();
        $randomImage = $faker->imageUrl(640, 480, 'animals', true);
        $productData = array_merge($this->validatedData($request), ['image' => $randomImage]); // adds faker image to request

        Product::create($productData);

        return redirect()->route('products.index')->with('success', 'Product was created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::find($id)->update($this->validatedData($request));

        return redirect()->route('products.index')->with('success', 'Product was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $productName = $product->name;
        $product->delete();
        return redirect()->route('products.index')->with('success', "$productName was deleted from products!");
        
    }
    //'name', 'price', 'description', 'item_number', 'image'
    private function validatedData($request){
        return $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'item_number' => 'integer',
        ]);
    }
}
