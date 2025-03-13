<?php

$colors = array("red", "green", "blue", "yellow" , "black", "white");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2];

echo "<br>";
echo "<br>";
for($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

$colors=["white","blue","Yellow", "Black" ,"Yellow", "Black"];
echo "<ul>";
for($i=0; $i <=5;$i++){
  echo "<li>$colors[$i] </li>";
}
echo "</ul>";


echo "<br>";
echo "<br>";
$colors[1] = "pink";
$colors[2] = "purple";
array_unshift($colors);

foreach ($colors as $value) {
    echo "$value <br>";
}

$colors_count= count($colors);

echo "<br>";
echo "<br>";

$marks =["philosophy"=> 80, "math"=> 90, "english"=> 70, "science"=> 85, "social science"=> 75];

foreach ($marks as $key => $value) {
    echo "Subject: $key, Marks: $value <br>";
}

