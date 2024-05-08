<?php

/*

FOR LOOP

for (initialize; condition; increment) {
    code
}
*/

for($x=0; $x<=10; $x++){
    echo $x."<br>";
}

/* WHILE LOOP

while (condition) {
    code
}*/

$x = 1;

while($x <= 15){
    echo "Number $x </br>";
    $x++;
}


/* DO WHILE LOOP
do {
    code
} while (condition);
*/

$x = 1;

do {
    echo "do while: Number $x </br>";
    $x++;
} while ($x <=5);



/* FOR EACH LOOP

foreach ($array as $value) {
    code
}
*/

$posts = ["First Post", "Second Post", "Third Post"];

foreach($posts as $post){
    echo "$post </br>";
}


// FOR EACH GETTING INDEX AS WELL
foreach($posts as $index => $post){
    $leading_number = $index + 1;    
    echo "$leading_number. $post </br>";
}


$person = [
    'fn' => 'Klee',
    'ln' => "Duderman",
    "contact" => "Email"
];

foreach($person as $key => $value){
    echo "$key is $value </br>";
}