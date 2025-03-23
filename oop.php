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
        echo "Name: $this->name\n";
        echo "Roll: $this->roll\n";
        echo "class: $this->class\n";
    }

}



$student1 = new student();
$student1 -> name = "Mahid";
$student1 -> roll = 1;
$student1 -> class = "Programmer";
$student1 -> showResult();
$student1 -> getStudentInfo("John Doe", 1, "Programmer");


$student2 = new student();
$student2 -> name = "Morshed";
$student2 -> roll = 2;
$student2 -> class = "Programmer";
$student2 -> showResult();
$student2 -> getStudentInfo("Morshed", 2, "Programmer");


$student3 = new student();
$student3 -> name = "Nure alam";
$student3 -> roll = 3;
$student3 -> class = "Programmer";
$student3 -> showResult();
$student3 -> getStudentInfo("Morshed", 3, "Programmer");



