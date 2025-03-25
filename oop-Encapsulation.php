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

$student1 -> getStudentInfo("Mahid", 1, "Programmer");
$student1 -> showResult();

echo "<br>";
echo "<br>";


$student2 = new student;

$student2 -> getStudentInfo("Morshed", 2, "Programmer");
$student2 -> showResult();

echo "<br>";
echo "<br>";

$student3 = new student;

$student3 -> getStudentInfo("Maimuna", 3, "Programmer");
$student3 -> showResult();


echo "<br>";
echo "<br>";



