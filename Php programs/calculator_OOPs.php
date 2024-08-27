<?php
class calculator{
    public $result;
    function __construct(){
        echo "<-------------------Calculator-------------------><br>";
        $this->result = 0;
        echo 'Result is : ';
    }
    function add($num){
        $this->result += $num;
    }
    function sub($num){
        $this->result -= $num;
    }
    function mul($num){
        $this->result *= $num;
    }
    function div($num){
        if ($num!==0) {
            $this->result /= $num;
        }
        else{
            $this->result = false;
        }
    }
}
//calculator 1
$calculator = new calculator();

$calculator->add(20);

$calculator->sub(5);

$calculator->mul(2);    

$calculator->div(2);

if ($calculator->result == false){
    echo "Invalid result";
}
else {
    echo $calculator->result.'<br>';
}

//calculator 2

$calculator2 = new calculator();

$calculator2->add(100);

$calculator2->sub(50);

$calculator2->mul(2);    

$calculator2->div(0);
if ($calculator2->result == false){
    echo "Invalid result";
}
else {
    echo $calculator2->result.'<br>';
}
?>