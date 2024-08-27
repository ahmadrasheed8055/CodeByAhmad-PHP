<?php
echo "<h2>Here is the php funtion program.</h2><br>";


function marks_sum($marks){
    $sum = 0;
    foreach ($marks as  $value) {
        $sum = $sum + $value;
    }
    return $sum;
}
function avg($marks){
    $array_count = count($marks);

    $sum = 0;
    foreach ($marks as  $value) {
        $sum = $sum + $value;
    }
    $avg = $sum/$array_count;
    return $avg;
}
//Ahmad marks & Average
$ahmad = array("45", "78", "56","34","99");
$ahmad_mark = marks_sum($ahmad);
echo "Total marks of ahmad is $ahmad_mark<br>";

$avg_marks = avg($ahmad);
echo "Average of ahmad's marks is $avg_marks<br>";
echo "<hr>";
//Ali marks and Average
$ali = array("99", '66','45', '99', '100');
$ali_marks = marks_sum($ali);
echo "Total marks of ali is $ali_marks<br>";

$avg_marks = avg($ali);
echo "Average of ali's marks is $avg_marks";


?>