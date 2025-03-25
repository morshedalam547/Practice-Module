<?php

abstract class person{
    public $name;
    public $age;
    
    public function __construct($name="No Name", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }
    
    public function show(){
        echo "Name: $this->name" . "<br>";
        echo "Age: $this->age" . "<br>";
    }
    
    abstract public function work();
}

class player extends person{
    public $game;
    
    public function __construct($name="No Name", $age = 0, $game = "No Game"){
        parent::__construct($name, $age);
        $this->game = $game;
    }
    
    public function show(){
        parent::show();
        echo "Game: $this->game" . "<br>";
    }
    
    public function work(){
        echo "I am a player" . "<br>";
    }
}

$player1 = new player("Mahid", 25, "Cricket") ;
$player1->show();