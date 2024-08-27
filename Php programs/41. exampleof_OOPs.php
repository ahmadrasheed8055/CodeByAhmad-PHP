<?php
class calculator {
    public $results;
    function __construct(){
       echo "<br> <br>";
       echo 'Result is :';
        
    }
    function add($a, $b){
       echo  $this->results = $a + $b;
    }
    function sub($a, $b){
       echo $this->results = $a - $b;
    }
    function mul($a, $b){
       echo $this->results = $a * $b;
    }
    function div($a, $b){
        if ($b!==null && $b!==0){
            echo $this->results = $a / $b;
        }
        else{
            echo "Invalid Input";
        }
    }
    
    
    
}

$addition = new calculator();
$addition->add(10,20);
// $addition->get_results($addition);

$subtraion = new calculator();
$subtraion->sub(20,10);

$divition = new calculator();
$divition->div(20,0);





?>