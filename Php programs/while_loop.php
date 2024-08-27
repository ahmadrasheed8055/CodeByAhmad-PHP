<?php
$num = 4;
$i = 1;
$table = 1;
echo "<h2>Table by using while loop</h2>";
while ($i <= 10) {
    $table = $num * $i;
    echo "$num* $i = $table <br>";

    $i++;
}

?>