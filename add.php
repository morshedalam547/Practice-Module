<?php

$num = 10;
$num2 = 10;

$result = ($num == $num2) ? "True" : "False";

echo $result;

echo "<br>";

$num = 10;
$num2 = "10";

$result = ($num === $num2) ? "True" : "False";

echo $result;

echo "<br>";

$number = 10;
$number2 = 10;

if($number == $number2){
    echo "True";
}else{
    echo "False";
}

echo "<br>";

$age = 17;

if($age > 18){
    echo "He is a tenizer";

}else{
    echo "she is not a teenager";
}

echo "<br>";


$groups = "Human";
$place = "Earth";

printf("We are %s live in %s", $groups,$place);

echo "<br>";

