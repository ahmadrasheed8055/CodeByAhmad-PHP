<?php
echo "Welcome to the php site, today we are going to discuss about cookies :)";
$cookie_name = "user";//this is the name of the cookie
$cookie_value = "Ahmad Rasheed.";//this is the value of the cookie 

setcookie($cookie_name,$cookie_value, time() + 86400 , '/');//this is the syntax of the cookie


if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie is not set!";
}
else{
   echo $_COOKIE[$cookie_name];//this is the global variable of cookie
}

?>