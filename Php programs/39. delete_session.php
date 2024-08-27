<?php
session_start();

session_unset();
//to delete the id values

session_destroy();
//to delete session

echo "Session deleted.";
?>