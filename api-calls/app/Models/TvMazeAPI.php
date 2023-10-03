<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class TvMazeAPI{
    public static function fetch($showNumber){
        $episodeData = Http::get("https://api.tvmaze.com/shows/$showNumber/episodes")->json();

        $episodeCollection = collect($episodeData);

        return $episodeCollection ->map(function($episode){
           // return new Episode($episode['name']);
            return new Episode($episode['name'] ?? '', $episode['image']['original'] ?? '', $episode['season'] ?? '',$episode['number'] ?? '',$episode['summary'] ?? '');

           /* return new Episode([
                'name' => $episode['name'] ?? 0,
                //'imageUrl' => $episode['image']['original'] ?? 0,
              //  'season' => $episode['season'] ?? 0,
              //  'episode' => $episode['number'] ?? 0,
              //  'summary' => $episode['summary'] ?? 0,
            ]);*/

            //return new Episode($episode['name'] ?? 0, ['image']['original'] ?? 0);

            
            //return new Episode($episode['name'] ?? 0,['image']['original'] ?? 0, ['season'] ?? 0,['episode'] ?? 0,['summary'] ?? 0);

           // return new Episode($episode['name', 'imageUrl', 'season', 'episode', 'summary']);
        });
    }
}