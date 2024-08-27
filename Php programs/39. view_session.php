<?php
session_start();
// print_r($_SESSION) ;
if ($_SESSION) {
    echo "Welcome to this site Mr. " . $_SESSION['name'];
}
else{
    echo "Name is not given.";
}
?>