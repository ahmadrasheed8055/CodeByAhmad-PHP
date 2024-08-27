<?php
echo "<h2>Multi dimentional array by using php.</h2>";
//2 dimentional array
echo "<br> <h3>Two dimentional array</h3> "  . "<br>";
$twoDim = array(
    array(12, 34, 45, 67),// 
    array(12, 34, 45, 67),
    array(12, 34, 45, 67),
    array(12, 34, 45, 67)
);

for ($i = 0; $i < count($twoDim); $i++) {
    for ($j = 0; $j < count($twoDim); $j++) {
        echo $twoDim[$i][$j] . " ";
    }
    echo "<br>";
}
//this count funciton is use to count the number in the array...
echo "<br> <h3>Three dimentional array</h3> "  . "<br>";


// 3 dimentional array
$threeDim = array(
    array(
        array(12, 34, 45, 67),
        array(12, 34, 45, 67),
        array(12, 34, 45, 67),
        array(12, 34, 45, 67)
    )
);
 for ($i=0; $i < count($threeDim) ; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        for ($k=0; $k < 4; $k++) { 
            echo $threeDim[$i][$j][$k] , " ";
        }
        echo "<br>";
    }
    echo "<br>";
 }
?>