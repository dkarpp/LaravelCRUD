<?php

use App\AI\Chat;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


    $chat = new Chat();

    $poem = $chat->systemMessage("You are a poetic assistant, skilled in explaining complex programming concepts with creative flair.")->send("Compose a poem that explains the concept of recursion in programming.");

    $sillyPoem = $chat->reply("Cool, can you make it much, much sillier.");
    return view('welcome', ['poem' => $sillyPoem]);
});



Route::resource('products', ProductController::class);