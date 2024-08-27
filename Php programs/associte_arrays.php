<?php

echo "<h2>Here is the Associate arrays in php.</h2><br>";

$favcol = array("ahmad" => "Blue", "ali" => "Green", "saqib" => "Binary" );
//There is called index array or numberic arrays.

foreach ($favcol as $key => $value) {
    echo "Favorite color of $key is $value <br>";
}


    ?>