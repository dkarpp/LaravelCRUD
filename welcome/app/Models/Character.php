<?php

namespace App\Models;

class Character {
    public function __construct($name){
        $this->name = $name;
    }
    public function __toString(){
        return "Name: $this->name";
    }
}