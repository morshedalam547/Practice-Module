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