<?php
$servername = "localhost";
$username = "root";
$password = "";
$databse = "s_registration";
// $databse = "ahmaddb";

$conn = mysqli_connect($servername, $username, $password, $databse);

if (!$conn) {
    echo "Not connected";

} else {
    echo "Connected! <br>";
}


?>