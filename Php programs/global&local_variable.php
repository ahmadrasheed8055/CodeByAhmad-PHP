<?php
echo "<h2>This program contian information of globla and local variable</h2><br>";

$num = 100; //This variable is a global variable..

function printVar(){
   // $num = 200; //This varible is local variable...
   //if i want global variable in function just use global 
   global $num;
    echo $num . "<br>";
}
echo $num . " <br>This is global variable value.<br><hr>";
printVar() . print("This is local variable value." ) ;

?>