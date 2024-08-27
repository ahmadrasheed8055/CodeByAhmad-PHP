<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Sorry we are facing some problems to connection.");
}
else{
    echo "Connected!<br>";
}
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);

//$rows = mysqli_num_rows($result);
//echo $rows;
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach ($data as $value) {
    echo $value['roll no']." ".$value['name']." ".$value['section']." <br>";
}


?>