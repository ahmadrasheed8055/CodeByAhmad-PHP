<?php

$marks = 50;

if ($marks >= 90) {
    echo "A Grade";
} else if ($marks >= 80) {
    echo "B Grade.";
} else if ($marks >= 70) {
    echo "C Grade.";
} else if ($marks >= 60) {
    echo "D Grade.";
} else if ($marks >= 50) {
    echo "E Grade.";
} else if ($marks < 50) {
    echo "B Grade.";
} else {
    echo "Invalid number!";
}
?>