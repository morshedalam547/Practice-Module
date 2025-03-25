<?php


//inheritance Work under

class Person{

    public $name;
    public $age;


    function __construct($name="No Name", $age = 0 ){
        $this->name = $name ;
        $this->age = $age;
   
    }
    function show(){
        echo "Name: $this->name " .  " Age: $this->age " ." <br>";
    }

  
}
$p1 = new Person();
$p2 = new Person("Morshed", 26);    
$p3 = new Person("Mamun", 27);


$p1->show();
$p2->show();
$p3->show();

echo "<br>";
echo "<br>";




class player extends Person{
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
        echo "$this->name is working as a player." . "<br>";
    }
}
 
 
 $player1 = new player("Mahid", 25, "Cricket") ;
 $player1->show();
 
 $player2 = new player("Morshed", 26, "Football") ;
 $player2->show();
 
 
 
 class Animal{
 
     public function sound(){
         echo "This is Animal Sound" . "<br>";
     }
 }
 
 echo "<br>";
 
 
 class Dog extends Animal{
 
     public function __construct(){             // akene constructor use korar krone ait sober age call hobe.
         echo "Dog class is create" . "<br>";
     }
     public function playing(){
         echo "Dog is playing";
     }
 }
 
 $dog = new Dog();
 
 echo $dog->sound();
 echo $dog->playing();
 