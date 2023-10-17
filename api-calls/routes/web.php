<?php

use Illuminate\Support\Facades\Route;
use App\Models\TvMazeAPI;
use App\Models\Episode;
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
    return view('welcome');
});


Route::get('/load-episodes', function () {
    $showNumber = intval(request()->query('showNumber'));
    $showNumber = $showNumber < 1 ? 1 : $showNumber;

    $episodes = TvMazeAPI::fetch($showNumber);
    return view('episodes/index', ['episodes' => $episodes]);

   // return view('welcome');

    /*

    $limit = intval(request()->query('limit'));
    $limit = $limit < 1 ? 10 : $limit;
    // code to all api, construct the data, assign to $characters
    $characters = BreakingBadAPI::fetchCharacters($limit);
    return view('characters/index', ['characters' => $characters]);

    */
});
Route::get('/view-episodes', function () {
    $showNumber = intval(request()->query('showNumber'));
    $showNumber = $showNumber < 1 ? 1 : $showNumber;

    $episodes = Episode::where('show_number', $showNumber)->get();
    return view('episodes/index', ['episodes' => $episodes]);
});


