<?php
//To write the data in a file fwrite()..
// $fptr = fopen('file2.txt','w');
// echo "To write the data in file2";
// fwrite($fptr,"This data is writen by using fwrite function.\n");
// fwrite($fptr,"This is the second line.");

//To append the data in a file...
$fptr = fopen('file2.txt','a');
fwrite($fptr,"\n This line is appended by using append method in php");
?>