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

/* №3
Task : Write the print String Return Number() function, which prints a string and returns a numeric value.
       Write the return value of your function to a variable named $my_num.
       Print out $my_num. pan_yurek
*/
function printStringReturnNumber($string): string
{
    echo $string;
    return strlen($string);
}

$my_num = printStringReturnNumber("\nHello, World!");
echo "\nLen this sentence: ".$my_num;

// №4 (＞︿＜)

function increaseEnthusiasm($string): string
{
    $string .= '!';
    return($string);
}
echo "\nWork function increaseEnthusiasm: ".increaseEnthusiasm("123");

function repeatTreeTimes($string): string
{
    return str_repeat($string, 3);
}
echo  "\nWork function repeatTreeTimes: ".repeatTreeTimes("1"). "\n";

echo  increaseEnthusiasm(repeatTreeTimes('1'));

function cut($string, $integer = 10):string
{
    return substr($string,0,$integer);
}

echo "\n".cut("0123456789",2)."\n";
echo "\n";
function typeArray($array, $integer = 0)
{
    if ($integer<sizeof($array)){
        echo $array[$integer] ."\n";
        typeArray($array, $integer + 1);
    }
}
typeArray($array);

function sumNumbers($numbers): int
{
    while ($numbers > 9) {
        $sum = 0;
        while ($numbers != 0) {
            $sum += $numbers % 10;
            $numbers = (int)($numbers / 10);
        }
        $numbers = $sum;
    }
    return $numbers;
}
$number = 172;
echo "\n".sumNumbers($number)."\n";

function fillArrayX($length): array
{
    $array = array();
    for($i = 0; $i < $length; $i++) {
        $array[$i] = str_repeat('x', $i + 1);
    }
    return $array;
}
print_r(fillArrayX(5));

function arrayFill($value, $length): array
{
    $array = array();

    for ($i = 0; $i < $length; $i++) {
        $array[] = $value;
    }

    return $array;
}
print_r(arrayFill('x', 5));

function sumTwoDimensionalArray($array): int
{
    $sum = 0;
    // Обходим каждый подмассив внешнего массива
    foreach ($array as $subArray) {
        // Обходим каждый элемент внутреннего подмассива
        foreach ($subArray as $element) {
            $sum += $element; // Добавляем значение элемента к сумме
        }
    }

    return $sum; // Возвращаем сумму элементов
}
// Пример двумерного массива
$array = [[1, 2, 3], [4, 5], [6]];
// Вызываем функцию для нахождения суммы элементов массива
echo "Сумма элементов массива: " .  sumTwoDimensionalArray($array). "\n";

function createTwoDimensionalArray($rows, $columns): array
{
    $array = array(); // Создаем пустой массив

    // Внешний цикл для создания строк
    for ($i = 0; $i < $rows; $i++) {
        $subArray = array(); // Создаем пустой внутренний массив для каждой строки

        // Вложенный цикл для создания элементов внутреннего массива
        for ($j = 1; $j <= $columns; $j++) {
            $subArray[] = $i * $columns + $j; // Добавляем элемент во внутренний массив
        }

        $array[] = $subArray; // Добавляем внутренний массив во внешний массив
    }
    return $array; // Возвращаем созданный массив
}
// Пример использования функции cоздаем массив из 3 строк и 3 столбцов
print_r (createTwoDimensionalArray(3, 3));

