<?php

$num = 10;
$num2 = 10;

$result = ($num == $num2) ? "True" : "false";

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

