<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchProductsGet;
use App\Http\Controllers\ProductsGet;
use App\Http\Controllers\ProductPost;
use App\Http\Controllers\ProductPut;
use App\Http\Controllers\ProductDelete;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search', SearchProductsGet::class);

Route::get('/products', ProductsGet::class);
Route::post('/products', ProductPost::class);
Route::put('/products', ProductPut::class);
Route::delete('/products/{id}', ProductDelete::class);