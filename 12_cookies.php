<?php

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking 
  or identifying return users. You can set specific data to be stored in the browser,
   and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them.
// Sessions are a better choice for storing sensitive data.

// sets a cookie for 24 hours.
setcookie("name","Klee", time() + 86400);


if(isset($_COOKIE["name"])){
    echo $_COOKIE["name"];
}

// REMOVES THE COOKIE
setcookie("name", "", -86400);