<?php

for($i = 10; $i >= 1; $i--){
    echo $i;
    echo "<br>";
}

foreach(range(1,10) as $number){
    echo $number;
    echo "<br>";
}