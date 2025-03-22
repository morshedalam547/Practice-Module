<?php
function terminalSalarySheet()
{
echo "Your Step (1 / 2 / 3): ";
$yourStep = (int) readline();


if ($yourStep === 1) {
    $basic = 10000;
} elseif ($yourStep === 2) {
    $basic = 8000;
} elseif ($yourStep === 3) {
    $basic = 5000;
} else {
    echo "Invalid step! 1, 2, or 3 \\n";
    return;
}

echo "Enter Bonus Amount: ";
$bonus = (int) readline();
echo "Enter Deduction Amount: ";
$deduction = (int) readline();

$netSalary = $basic + $bonus - $deduction;

echo "\\n Salary Slip ==\\n";
echo "Step: {$yourStep}\\n";
echo "Basic Salary: {$basic} TK\\n";
echo "Bonus: {$bonus} TK\\n";
echo "Deduction: {$deduction} TK\\n";
echo "----\\n";
echo "Net Salary: {$netSalary} TK\\n";
echo "====\\n";


}

terminalSalarySheet();



