<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ahmad";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    echo "Not connected";

} else {
    echo "Connected! <br>";
}
//Assingn a variable to the name and city conneted to the table in db
$name = "hasnain";
$city = "Basti Pirharh";
$sql = "INSERT INTO `employee1` ( `name`, `doj`, `city`) VALUES ( '$name', '2023-07-24 11:39:27.000000', '$city');
";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Your given data inserted successfully!";

} else {
    echo "Your given data is not inserted!";
}


?>