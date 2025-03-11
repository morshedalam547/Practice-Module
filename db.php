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

for ( $i= 1; $i<=4; $i++){
    echo "Allah <br>";
    if ($i == 3){
      continue;
    }
    
echo "<br>";

for ( $i= 1; $i<=4; $i++){
    echo "Allah <br>";
    if ($i == 3){
      continue;
    }
    
}
