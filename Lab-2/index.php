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

// 6) Mathematical functions
echo "\nTask №6 (Mathematical functions) \n";
// work with %
echo "\nWork with %.\n";

$a = 10; $b = 2;
echo $a % $b . "\n";
if ($a % $b == 0) {
    echo "Делиться без остатка\n";
}
else{
    echo "Делится с остатком\n";
}

// Working with sqrt and pow.
echo "\nWork with sqrt and pow.\n";
$st = pow( 2, 10);
$sq = sqrt(245);
$array = [4, 2, 5, 19, 13 , 0, 10];
$sumSquares = 0;
foreach ($array as $ellement) {
    $sumSquares += pow($ellement, 2);
}
echo "\n". $result = sqrt($sumSquares). "\n";

// Working with rounding functions: round, ceil, floor.
echo "\nWorking with rounding functions: round, ceil, floor.\n";
$round1 = round(sqrt(379), 1);
$round2 = round(sqrt(379), 2);
echo $round1. "\n"; echo $round2. "\n";


$sqrt = sqrt(587);

$round3 = array(
    'floor' => floor($sqrt),
    'ceil' => ceil($sqrt)
);
print_r($round3);

// working with min and max
echo "\nWorking with min and max.";
$arrayMinMax = [4, -2, 5, 19, -130, 0, 10];
echo "\nmin in array: ".min($arrayMinMax). "\n";
echo "max in array: ".max($arrayMinMax). "\n";

// working with random.
echo "\nWorking with min and max.\n";
echo "Random number from 1 to 100: ".rand(1, 100)."\n";
$arrayRandoNumbers = array();
for($i = 0; $i < 10; $i++){
    $arrayRandoNumbers[] = rand(1,100);
}
print_r($arrayRandoNumbers);

// Working with abs.
echo "\nWorking with abs.";
$a = 10; $b = 35;
$absSubtraction = abs($a - $b);
echo "\n". $absSubtraction."\n";

$arrayABS = [1, 2, -1, -2, 3, -3];

foreach ($arrayABS as $key => $number){
    $arrayABS[$key] = abs($number);
}
print_r($arrayABS);

// others \(￣︶￣*\)).
// №1
$givenNumber = rand(10,100);
$arrayDividers = [];
echo "\nDividers:". $givenNumber." is\n";
for ($i = 1; $i <= $givenNumber; $i++){
    if ($givenNumber % $i == 0){
        $arrayDividers[] = $i;
    }
}
print_r($arrayDividers);
// №2
$givenArray =  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0; $elementToSum = 0;
foreach ($givenArray as $element){
    $sum += $element;
    if ($sum > 10){
        break;}
    $elementToSum++;
}
echo "Element need to sum 10: ".$elementToSum."\n";