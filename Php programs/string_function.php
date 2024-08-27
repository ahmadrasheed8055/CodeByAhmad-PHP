<?php
$name = "My name is ahmad rasheed.";


echo str_word_count($name); 
echo "<br>";
echo "String reverce function.";
echo "<br>";
echo strrev($name);
echo "<br>";
echo "Characters behind it.";
echo "<br>";
echo strpos($name, "ahmad");
echo "<br>";
echo "For replacing..";
echo "<br>";
echo str_replace("ahmad", "<h4>Ahmad Rasheed</h4>", $name);

?>