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
$student1 -> name = "John Doe";
$student1 -> roll = 1;
$student1 -> class = "Programmer";
$student1 -> getStudentInfo("John Doe", 1, "Programmer");


$student2 = new student();

