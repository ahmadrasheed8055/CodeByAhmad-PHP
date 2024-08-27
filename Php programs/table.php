<?php
echo "<h2> This table is made by  using For Loop.<br>";
$table = 3;
for ($i=1; $i <=  10 ; $i++) { 

    echo $table . " * " . $i . " = " .  $table*$i . "<br>";
}


echo "<h2> This table is made by  using While Loop.<br>";
$i = 1;
while ($i <= 10) {
    echo $table . " * " . $i . " = " .  $table*$i . "<br>";
    $i++;
}

 
echo "<h2> This table is made by  using Do While Loop.<br>";
$i=1;
do {
    echo $table . " * " . $i . " = " .  $table*$i . "<br>";
    $i++;
} while ($i <= 10);

?>