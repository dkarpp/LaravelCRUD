<?php

use Illuminate\Support\Facades\Route;
use App\Models\BreakingBadAPI;
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

Route::get('/characters', function () {
    $limit = intval(request()->query('limit'));
    $limit = $limit < 1 ? 10 : $limit;
    // code to all api, construct the data, assign to $characters
    $characters = BreakingBadAPI::fetchCharacters($limit);
    return view('characters/index', ['characters' => $characters]);
});

Route::get('/', function () {
    // 'welcome' --> 'welcome.blade.php'

    return view('welcome');
});

