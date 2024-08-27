<?php

$fav_color = "Green";
switch ($fav_color) {
    case 'Red':
        echo "Your Favourate color is <b>Red</b>.";
        break;
    case 'Green':
        echo "Your Favourate color is <b>Green</b>.";
        break;
    case 'Blue':
        echo "Your Favourate color is <b>Blue</b>.";
        break;
    case 'Yellow':
        echo "Your Favourate color is <b>Yellow</b>.";
        break;
    case 'Pink':
        echo "Your Favourate color is <b>Pink</b>.";
        break;

    default:
        echo "$fav_color not found";
        break;
}

?>