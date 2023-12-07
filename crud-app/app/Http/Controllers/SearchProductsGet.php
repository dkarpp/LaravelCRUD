<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class SearchProductsGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
     try{

         $request->validate([
            'q' => 'required|string',
        ]);


        $query = $request->input('q');
        
            // Use Eloquent to construct the query
            $results = Product::where('name', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orWhere('item_number', 'like', '%' . $query . '%')
                ->get();

            return response()->json($results);

        }
        catch(\Exception $e)
        {
            return response()->json(['error' => 'Error searching with query. Query parameter q is required.'], Response::HTTP_BAD_REQUEST);
        }

    }
}
