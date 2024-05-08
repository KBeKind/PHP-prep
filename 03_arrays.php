<?php

// Simple Array
$numbers = [1,2,3];

$fruits = array('apple', 'orange', 'pear');

print_r($numbers);

var_dump($fruits);

echo $fruits[1];

// Associative Array
$colors = [
    1 => "red",
    4 => "blue",
    6 => "green"
];

echo $colors[4];


$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
];

echo $hex['red'];

$person = [
    'first_name' => 'Klee',
    'last_name' => 'Duderman',
    'contact' => 'Email'

];

echo $person['first_name'];


// Multi Dimensional Array

$people = [

    $person,

    [ 'first_name' => 'Klee2',
    'last_name' => 'Duderman2',
    'contact' => 'Email2'],

    [ 'first_name' => 'Klee3',
    'last_name' => 'Duderman3',
    'contact' => 'Email3']

];

echo $people[2]['last_name'];

// JSON ECODE AND DECODE
var_dump(json_encode($people));

?>