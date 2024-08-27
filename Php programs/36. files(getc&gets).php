<?php
// To open the file 
$fptr = fopen('file.txt','r');

//To print the data by using gets()
// echo $data = fgets($fptr);
// echo $data = fgets($fptr);
// echo $data = fgets($fptr);
// fgets() is use to print data line by line .

// To print the data by using fgetc()
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);
echo $data = fgetc($fptr);  

while($a = fgetc($fptr)){
    echo $a;
}

// fgetc() function is use to print character by character...

?>