<?php

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



$student1 = new student();
$student1 -> name = "Mahid";
$student1 -> roll = 1;
$student1 -> class = "Programmer";
$student1 -> showResult();
$student1 -> getStudentInfo("Mahid", 1, "Programmer");


// $student2 = new student();
// $student2 -> name = "Morshed";
// $student2 -> roll = 2;
// $student2 -> class = "Programmer";
// $student2 -> showResult();
// $student2 -> getStudentInfo("Morshed", 2, "Programmer");


// $student3 = new student();
// $student3 -> name = "Nure alam";
// $student3 -> roll = 3;
// $student3 -> class = "Programmer";
// $student3 -> showResult();
// $student3 -> getStudentInfo("Morshed", 3, "Programmer");



class person{

    public $name;
    public $age;


    function __construct($name="no Name", $age = 0 ){
        $this->name = $name;
        $this->age = $age;
   
    }
function show(){
    echo $this->name . " " . $this->age;
}
}

$p1 = new person();
$p2 = new person("Mahid", 25);
$p3 = new person("Morshed", 26);

p1->show();
p2->show();
p3->show();