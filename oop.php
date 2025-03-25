<?php

//Encapsulation Work under
class student{
    public $name;
    public $roll;
    public $class;

    public function getStudentInfo($name, $roll, $class){
        $this->name = $name;
        $this->roll = $roll;
        $this->class = $class;
        }
    
    public function showResult(){
        echo "Name: $this->name". "<br>";
        echo "Roll: $this->roll" . "<br>";
        echo "class: $this->class";
    }

}



$student1 = new student;
$student1 -> name = "Mahid";
$student1 -> roll = 1;
$student1 -> class = "Programmer";
$student1 -> showResult();
$student1 -> getStudentInfo("Mahid", 1, "Programmer");

echo "<br>";
echo "<br>";


$student2 = new student;
$student2 -> name = "Morshed";
$student2 -> roll = 2;
$student2 -> class = "Programmer";
$student2 -> showResult();
$student2 -> getStudentInfo("Morshed", 2, "Programmer");

echo "<br>";
echo "<br>";

$student3 = new student("Maimuna", 4, "Programmer");
$student3 -> showResult();

echo "<br>";
echo "<br>";




class person{

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


// $p1 = new person();
$p2 = new person("Mahid", 25);
$p3 = new person("Morshed", 26);

// $p1->show();
$p2->show();
$p3->show();

echo "<br>";
echo "<br>";

//inheritance Work under

class player extends person{
   public $game;
    
       public function __construct($name="No Name", $age = 0, $game = "No Game"){
           parent::__construct($name, $age);
           $this->game = $game;
            ;
        }
    
       public function show(){
            parent::show();
            echo "Game: $this->game" . "<br>";
           ;
        }


}


$player1 = new player("Mahid", 25, "Cricket") ;
$player1->show();

$player2 = new player("Morshed", 26, "Football") ;
$player2->show();