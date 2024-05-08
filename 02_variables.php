<?php

// String
// Integer
// Float
// Boolean
// Array
// Object
// NULL
// Resource

// Variables must be prefixed with $
// Variables must start with a letter or underscore
// variables cant start with a number
// variables can only contain alpha-numeric characters and underscores
// variables are case-sensitive


$name = "Klee";
$age = 10;
$has_kids = true;
$cash_on_hand = 20.75;

echo $name;
echo $age;
echo $has_kids;
var_dump($has_kids);
echo $cash_on_hand;

// echo $name . ' is ' . $age . ' years old';
echo "$name is $age years old";

echo 5 + 10;
echo '10' + '10';

// Constants
define("HOST", "localhost");
define("DB_NAME", "database name");

?>