<?php
//first step
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "ahmaddb";
//second step
$conn = mysqli_connect($servername, $username, $password);
//third step to cheak connected or not

if (!$conn) {
    die("sorry don'st connet to database!" . mysqli_connect_error());
} else {
    echo "Conneted successfully!<br>";
}


//to create databse 
$sql = "CREATE DATABASE ahmaddb2";
//if database creates it'll return 1 or true otherwise 0 or false (mysqli_query(','))
$result = mysqli_query($conn, $sql);

//to cheak it's connected or not
if ($result) {
    echo "Databse created successfully!";

} else {
    echo "Database is not created!" ;
}

?>