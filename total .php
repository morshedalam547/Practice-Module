<?php


echo "Math Mark is: ";
$math = (int) readline(60);

echo "English Mark is: ";
$english = (int) readline(60);

echo "Bangla Mark is: ";
$bangla = (int) readline(70);

echo "Arabic Mark is: ";
$arabic = (int) readline(80);

echo "History Mark is: ";
$history = (int) readline(90);

function myMark($math, $english, $bangla, $arabic, $history) {
$allMarks = $math + $english + $bangla + $arabic + $history;
$average = $allMarks / 5;


echo "Your Total Marks: $allMarks\\n";
echo "Your Average Marks: $average\\n";

if ($average >= 80) {
    echo "You Have Achieved A+\\n";
} elseif ($average >= 60) {
    echo "You Have Achieved A-\\n";
} else {
    echo "You Are Failed\\n";
}


}

myMark(60,50,51,514,51);