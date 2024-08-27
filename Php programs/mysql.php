<?php
echo "Here is the sqli method to connect with database <br>";

/*There are two ways to connect with databse 
1. Mysqli method
2. POD (php data objects)
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahmad";

// to cheak wheather it's connected or not 
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()){
    echo "Failed to connect.";
}
else{
    echo "Connected successfully!";
}
?>