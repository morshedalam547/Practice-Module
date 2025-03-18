<?php

$age = 5;

if($age >=13 && $age<=19){
    echo "He is teenager";
}elseif($age < 13 ){
    echo "he is  a kid";
}else{
    echo "He is adult";
}

echo "<br>";

$age = 15;

print ($age >= 13 && $age <= 19) ? "He is teenager" : (($age < 13) ? "He is a kid" : "He is adult");
echo "<br>";



$age = 2;

echo ($age >= 13 && $age <= 19) ?? "He is teenager" ?: (($age < 13) ? "He is a kid" : "He is an adult");


$string = "Morshed Alam";

echo strlen (string: $string);

//Reverse

echo "<br>";
echo strrev (string: $string);

echo "<br>";

echo strtolower(string: $string);

echo "<br>";

echo strtoupper(string: $string);


echo "<br>";

echo ucwords(string: $string);

echo "<br>";
$string1 = ' Mahid ';
$string2 = 'Hossain';

echo trim($string1) . $string2;

$skills = ["HTM, CSS, JS, PHP, MYSQL"];


$databaseData= json_encode($skills);

echo "<pre>";
var_dump($databaseData);
echo "</pre>";
