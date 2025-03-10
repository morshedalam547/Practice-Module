<?php

for($i = 10; $i >= 1; $i--){
    echo $i;
    echo "<br>";
}

foreach(range(1,10) as $number){
    echo $number;
    echo "<br>";
}

$number = 10;
$number2 = 20;
echo $number + $number2;
