<?php

function calculator($num){
   
    for($i=0; $i<=10; $i++){
        $result= $num * $i;
        echo $result . "<br>";
        
    }
   
}
 
calculator(5);

echo "<br>";
function forloop(){
   
    for($i=0; $i<=15; $i++){
        echo $i . "<br>";
    }
}
forloop();


$numbers = [1, 2, 3];

$result = array_map(function ($n) {
    return $n * 2;
}, $numbers);

echo '[' . implode(', ', $result) . ']';

echo "<br>";


$numbers = [1, 2, 3];

$result = array_map(fn($numbers) => $numbers * 2, $numbers);

echo '[' . implode(', ', $result) . ']';


echo "<pre>";
print_r($result);
echo "</pre>";


