<?php

define("DB_HOST", "localhost");
define("DB_USER", "php_dev");
define("DB_PASS", "php_dev");
define("DB_NAME", "php_dev");

// CREATE CONNECTION

$conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error){
    die("Connection Failed $conn->connect_error");
}

echo "CONNECTED";