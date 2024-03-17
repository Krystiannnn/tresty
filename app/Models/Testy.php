<?php

namespace App\Models;

class Testy{
    public $name;
    public $surname;

    function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    function showHTML(){
        return 'ble';
    }
    
}