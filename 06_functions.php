<?php

$y = 12;

function registerUser($email) {
    global $y;
    echo $y;
    echo "$email User registered";
}


registerUser("TestEmail");


function sum($n1 = 4, $n2 = 3){
    return $n1 + $n2;
}

echo sum(5);


$subtract = function($n1, $n2){
    return $n1 - $n2;
};

echo $subtract(10, 5);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(4, 6);