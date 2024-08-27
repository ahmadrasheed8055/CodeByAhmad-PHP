<?php

$servername = "localhost";
$username = "root";
$password = "";
$databse = "ahmad";
// $databse = "ahmaddb";

$conn = mysqli_connect($servername, $username, $password, $databse);

if (!$conn) {
    echo "Not connected";

} else {
    echo "Connected! <br>";
}
// $sqli = "CREATE DATABASE ahmaddb1";
// $result = mysqli_query($conn, $sqli);

//we are going to create a table in php
$sql = "CREATE TABLE `employee1` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `doj` DATETIME NOT NULL , `city` VARCHAR(15) NOT NULL , PRIMARY KEY (`sno`)) ;
";

$result = mysqli_query($conn, $sql);
if($result){
    echo "Table created successfullly!";
}
else{
    echo "Table not created for some reasons!";
}


?>