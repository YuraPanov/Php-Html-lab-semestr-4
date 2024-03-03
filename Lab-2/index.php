<?php
// 1)
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
echo "Task №1 (Access by link)";
$order = &$very_bad_unclear_name;

$order .= " any string";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.\n";

// 2)
echo "\nTask №2 (Numbers) \n";
$anyName = 10;
echo "$anyName \n";
$anyNameFloat = 1.764;
echo "$anyNameFloat \n";
echo 10+2;

$lastMonth = 1187.23;
$thisMonth = 1089.98;

echo "\n". $lastMonth - $thisMonth. "\n";

// 3)
echo "\nTask №3 (Multiplication and division) \n";
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "$daysPerLanguage\n";

// 4)
echo "\nTask №4 (Degree) \n";

echo 8**2 . "\n";

// 5) pan_yurek xD
echo "\nTask №5 (Assignment operators) \n";
$myNum = 12;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer . "\n";

// 6)
echo "\nTask №6 (Mathematical functions) \n";
// work with %
$a = 10; $b = 2;
echo $a % $b . "\n";
if ($a % $b == 0) {
    echo "Делиться без остатка\n";
}
else{
    echo "Делится с остатком\n";
}

// work with sqrt and pow

$st = pow( 2, 10);
$sq = sqrt(245);
$array = [4, 2, 5, 19, 13 , 0, 10];
$sumSquares = 0;
foreach ($array as $ellement) {
    $sumSquares += pow($ellement, 2);
}
echo "\n". $result = sqrt($sumSquares). "\n";

// Working with rounding functions: round, ceil, floor.


