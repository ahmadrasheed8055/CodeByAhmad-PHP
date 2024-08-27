<?php
$fptr = fopen('file.txt', 'r');

if (!$fptr) {
    die("File opening error!");
}

$content = fread($fptr, filesize('file.txt'));
echo $content;
fclose($fptr);
?>