<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
var_dump(count($arr));
echo'<br>';

// переместить первые 4 элемента массива в конец массива
array_push($arr, $arr[0], $arr[1], $arr[2], $arr[3]);
array_splice($arr, 0, 4);
print_r($arr);
echo'<br>';

// получить сумму 4,5,6 элемента
$arrSumm = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sum = 0;
for ($i = 3; $i<=5; $i++) {
    $sum += $arrSumm[$i];
};
print_r($sum);
echo'<br>';

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
print_r(array_diff($secondArr, $firstArr));
echo'<br>';

// найти все элементы которые присутствую в первом и отсутствуют во втором
print_r(array_diff($firstArr, $secondArr));
echo'<br>';

// найти все элементы значения которых совпадают 
print_r(array_intersect_assoc($firstArr, $secondArr));
echo'<br>';

// найти все элементы значения которых отличается
$result = [];
foreach ($firstArr as $key1 => $value1) {
    if (!in_array($value1, $secondArr)) {
        $result[] = $value1;
    }
}
foreach ($secondArr as $key2 => $value2) {
    if (!in_array($value2, $firstArr)) {
        $result[] = $value2;
    }
}
var_dump($result);
echo'<br>';


$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],  
];

// получить все вторые элементы вложенных массивов
$secondElementsArr = [];
foreach ($firstArr as $value) {
    if (is_array($value)) {
        $counter = 0;
        foreach ($value as $itog) {
            $counter++;
            if ($counter == 2) {
                $secondElementsArr[] = $itog;
            }
        }
    }
}
var_dump($secondElementsArr);
echo'<br>';

// получить общее количество элементов в массиве
$totalNumber = [];
foreach ($firstArr as $value1) {
    $totalNumber[] = $value1;
}
foreach ($firstArr as $value2) {
    if (is_array($value2)) {
        foreach ($value2 as $value3) {
            $totalNumber[] = $value3;
        }
    }
}
var_dump(count($totalNumber));
echo'<br>';

// получить сумму всех значений в массиве
$summValues = [];
foreach ($firstArr as $values2) {
    if (is_array($values2)) {
        foreach ($values2 as $values3) {
            $summValues[] = $values3;
        }
    } else {
        $summValues[] = $values2;
    }
}

var_dump(array_sum($summValues));