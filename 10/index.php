<?php
// Array

$a = 5;
$b = "Salom";
$c = true;
$d = 3.14;
// programmer_uz
$array = [1, -2, 4, 23, 100, 20, -30];

print_r($array);

for ($i = 5; $i < 10; $i++) {
    print($array[$i]); // 8

    if ($i % 2 == 0) {
        array_pop($array);
    } else {
        array_push($array, 10 ** $i);  // 10000000
    }
}







// display($array);

// function display($numbers, $i = 0){
//     if($i < count($numbers)){
//     echo $numbers[$i] . "<br/>";
//     display($numbers, $i + 1);
//     }
// }
