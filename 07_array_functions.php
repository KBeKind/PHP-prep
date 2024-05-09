<?php

$fruits = ["apple", "orange", "pear"];

echo count($fruits);

var_dump(in_array("apple", $fruits));

$fruits[] = "grape";

array_push($fruits, "blueberry", "strawberry");

array_unshift($fruits, "blackberry");

print_r($fruits);
echo "</br>";
// TAKES OFF THE END
array_pop($fruits);

// TAKES OFF THE BEGINNING
array_shift($fruits);

// ALSO REMOVES THE INDEX SO there would no longer be a 2 within $fruits 
unset($fruits[2]);

print_r($fruits);

echo "</br>";

// SPLIT INTO 2 CHUNKS

$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);
echo "</br>";


// CONCAT ARRAYS

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

echo "</br>";

$arr4 = [...$arr1, ...$arr2];
print_r($arr4);

echo "</br>";

//COMBINE ARRAY
$a = ["green","red","yellow"];
$b = ["avacado", "apple", "banana"];

$c = array_combine($a, $b);
print_r($c);

echo "</br>";

$keys = array_keys($c);
print_r($keys);

echo "</br>";

$flipped = array_flip($c);
print_r($flipped);

echo "</br>";

$numbers = range(1, 20);
print_r($numbers);

echo "</br>";

$new_numbers = array_map(
    function($number) {
        return "Number $number";
    }, $numbers);
print_r($new_numbers);

echo "</br>";

$less_than_10 = array_filter($numbers, fn($number)=> $number <= 10);
print_r($less_than_10);

echo "</br>";

$sum = array_reduce($numbers, fn($carry,$number)=> $carry + $number);
var_dump($sum);

