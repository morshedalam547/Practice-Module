<?php

$number = 150+150;

echo $number;

$a = 5;
$b = 6;

$c = $a+$b;
echo $c;


echo "<br>";

$name = "panda";

$name = "panda the great";

print $name;

echo "<br>";

define("name", "panda");

echo name;
echo "<br>";

define("fname", "panda the great");

echo fname;
echo "<br>";

$today_date = 6;

$tomorrow_date = date("Y-m-d", strtotime("+2 days"));

print $tomorrow_date;
echo "<br>";

$name = "Morshed alam";

print mb_strtoupper($name);


echo (10+5) *2;
echo "<br>";
function greet($name = "Guest") {

    return "Welcome, " . $name;

    }

   echo greet();
   echo "<br>";
   function greet2($name = "Nobody") {
    return "Hello, " . $name;
}
$result= greet2("Alice");

print $result;

echo "<br>";

function greet3() {
    return "Hello"; 
}
$result= greet3();

echo $result;
echo "<br>";

$number = 2;
$number = 2;

if($number >2) {
    echo "5 is greater than 2";
}elseif($number ==2) {
    echo "2 is equal to 2";
}else {
    echo "5 is less than 2";
}
echo "<br>";

