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
