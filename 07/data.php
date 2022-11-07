<?php

// noun
// verb 

// Recursion function 
function numbers($n){
    if($n == 10){
        return $n;
    }
    return $n + numbers($n + 1);
}

function olNimadir(...$data){
    // extended for loop
    foreach($data as $value){
        echo $value . "<br/>";
    }
}

echo olNimadir(1, 2, 3, 4, 5, 6, 7, 8);

$user_data = [
    "name" => "Shodmonbek",
    "age" => 19,
    "is_married" => false,
    "is_fallen_in_love" => false,
];


foreach($user_data as $value){
    print($value . "<br/>");
}

?>