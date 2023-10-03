<?php

namespace App\Models;

class Episode{

    public function __construct($name, $imageUrl, $season, $episode, $summary){
        $this->name = $name;
        $this->imageUrl = $imageUrl;
        $this->season = $season;
        $this->episode = $episode;
        $this->summary = $summary;
    }
    public function __toString(){
       /* return "Episode: 
        Name: $this->name
        Image URL: $this->imageUrl
        Season: $this->season
        Episode: $this->episode
        Summary: $this->summary";
*/

return "Episode: 
Name: $this->name
Image URL: $this->imageUrl
Season: $this->season
Episode: $this->episode
Summary: $this->summary";
    }
 
    /*protected $fillable = [
        'name',
        'imageUrl',
        'season',
        'episode',
        'summary'
    ];*/
}