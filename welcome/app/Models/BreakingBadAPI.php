<?php


namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
 
//$response = Http::get('http://example.com');

//call:
//BreakingBadAPI::fetchCharacters();
class BreakingBadAPI{
  public static function fetchCharacters($limit){
    $charactersData = Http::get("https://www.breakingbadapi.com/api/characters?limit=$limit")->json();

    $charactersCollection = collect($charactersData);

    return $charactersCollection ->map(function($character){
        return new Character($character['name']);
    });
    
  }  
}

