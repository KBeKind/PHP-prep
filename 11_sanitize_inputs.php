<?php

// $_GET and $_POST superglobals

// we can pass data through urls and forms using the $_GET and $_POST superglobals

// echo $_GET["name"];
// echo $_GET["age"];

// if(isset($_POST["submit"])){
//     $name = htmlspecialchars($_POST["name"]);
//     $age = htmlspecialchars($_POST["age"]);
//     echo $name;
//     echo $age;
// }


if(isset($_POST["submit"])){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
// $name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
// $age = filter_var($_POST["age"], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    echo $age;
}

?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">

</form>