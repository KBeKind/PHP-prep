<?php

/*
<
>
<=
>=
== Equal to
=== Identical to
!= Not Equal to
!-- Not Identical to
*/

/*
IF STATEMENTs
if (condition) {
    code to be executed
}
*/

$age = 10;

if($age >= 8){
    echo "You are older than 7";
} else {
    echo "You are 7 or younger";
}

$the_time = date("H") - 7;
echo "$the_time";

if($the_time < 12){
    echo "Good Morning";
} else if ($the_time < 17 ){
    echo "Good Afternoon";
} else {
    echo "Good Evening";
}


$posts = ["First Post"];


if(!empty($posts)){
   echo $posts[0];
} else {
    echo "No Posts";
}


// TERNARY

echo !empty($posts) ? $posts[0] : "No Posts";

$first_post = !empty($posts) ? $posts[0] : "No Posts";

// TERNARY WITH COELESCIING OPERATOR
$first_post = $posts[0] ?? null;


// SWITCH STATEMENT
$fav_color = "green";

switch($fav_color) {
    case "red":
        echo "you like red";
        break;
    case "blue":
        echo "you like blue";
        break;
    case "green":
        echo "you like green";
        break;
    default:
        echo "you don't like color";
}