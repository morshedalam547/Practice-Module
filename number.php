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
