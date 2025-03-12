<?php

for($i = 10; $i >= 1; $i--){
    echo $i;
    echo "<br>";
}

foreach(range(1,10) as $number){
    echo $number;
    echo "<br>";
}

$i=3;
do{
    $i++;
 echo $i .'<br>';

}while($i<5);

// function
function myFunction($name){
    echo "Hello $name";
}

print myFunction("John");
echo "<br>";
function Fruits($fruits){
    echo $fruits;
    echo "<br>";
}

Fruits("App"); 

// Recursive function

function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
echo "Factorial of 10 is " . factorial(10);

// Break and Continue
for($i = 1; $i<= 10; $i++){
    if ($i == 5){
        continue;
    }
    echo  "print $i". "<br>";

} 


echo "<br>";

for( $i= 1; $i<=4; $i++){
    echo "Allah <br>";
    if ($i == 3){
      continue;
    }
    
}

echo "<br>";


// Array
$colors = array("Red", "Green", "Blue");

foreach($colors as  $color){
    echo  $color;
    echo "<br>";
}

echo "<pre>";
print_r($colors);
echo "</pre>";


echo "<pre>";
var_dump($colors);
echo "</pre>";

//function
function  addition($a, $b){
   echo $a + $b;
}


function sum2(int ...$numbers) :int {
    $result =0;
    for($i=0; $i<count($numbers);$i++){
        $result +=$numbers[$i];
        }
      return $result;
}
echo sum2(5,6,8,5,6,30,20,10,20,30,40,50,60,70,80,90,100,520,622,55,55,8500055);

echo "<br>";

function colorDiv($bgcolor){
    echo "<div style='background-color:$bgcolor; padding:25px; border:1px solid black'> Dynamic div style</div>";
}

colorDiv("orange");
colorDiv("green");


function colorDiv2($bgcolor = "black"){
    echo "<div style='background-color:$bgcolor; padding:25px; border:1px solid black'> Dynamic div style</div>";
}


colorDiv2("orange");
colorDiv2("tomato");


$number = [20,30,100];

function returnAddition($a){
    $result = 0;
    foreach($a as $key=> $num){
        $result += $a[$key];
    }
    $userNumbers = implode(",", $a);

    $feedback = [
        "numbers" => $userNumbers,
        "result" => $result
    ];
    return $feedback;
}

$responses = returnAddition($number);

echo returnAddition($number)["result"];

print "<pre>";
 var_dump($responses);
print "</pre>";

echo "<br>";


function sum3(int ...$numbers) :int {
    $result =0;
    for($i=0; $i<count($numbers);$i++){
        $result +=$numbers[$i];
        }
      return $result;
}
$result = sum2(500+65);

echo $result;

print "<pre>";
var_dump($result);
print "</pre>";

//local variable and global variable


$test_var = "Test <br>";

function my_name(){
global $test_var;
global $my_name;
$my_name = "Morshed";
echo $test_var;

}

my_name();
echo $my_name;

function my_name2(){
    $my_name = "Morshed";
    echo $my_name;
}
my_name2();
 echo "<br>";