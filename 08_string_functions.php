<?php

$string = "Hello Whirled";

echo strlen($string);
echo "</br>";

echo strpos($string, "o");
echo "</br>";

echo strrpos($string, "e");
echo "</br>";

echo strrev($string);
echo "</br>";

echo strtolower($string);
echo "</br>";

echo strtoupper($string);
echo "</br>";

echo ucwords($string);
echo "</br>";

echo str_replace("Whirled", "World", $string);
echo "</br>";

echo substr($string, 0, 5);
echo "</br>";

echo substr($string, 5);
echo "</br>";

if (str_starts_with($string, "Hello")){
    echo "Yes";
}
echo "</br>";


if (str_ends_with($string, "World")) {
    echo "Yes";
} else {
    echo "No";
}
echo "</br>";


$string2 = "<h1>Hello</h1>";
echo htmlspecialchars($string2);
echo "</br>";

printf("%s likes to %s", "Klee", "code");
echo "</br>";

printf("1+1=%d", 1+1);
echo "</br>";

