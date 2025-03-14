<?php

$math =50;
$english = 70;
$science = 85;
$social_science = 75;
$philosophy = 90;

$average = ($math + $english + $science + $social_science + $philosophy) / 5;

if($average >= 80) {
    echo "A+";
} elseif($average >= 70) {
    echo "A";
} elseif($average >= 60) {
    echo "A-";
} elseif($average >= 50) {
    echo "B";
} else {
    echo "F";
}


// $average = ($math + $english + $science + $social_science + $philosophy) / 5;
// $result = $average >= 80 ? "A+" : ($average >= 70 ? "A" : ($average >= 60 ? "A-" : ($average >= 50 ? "B" : "F")));
// echo "Average: $average, Result: $result";

echo "<br>";

$math = 10;
$english = 70;
$science = 85;
$social_science = 75;
$philosophy = 90;

if ($math < 30 || $english < 30 || $science < 30 || $social_science < 30 || $philosophy < 30) {
    echo "Result: Failed";
} else {
    echo "Result: Passed";
}