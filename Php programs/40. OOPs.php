<?php
class Player {
    //Properties
    public $name;
    public $speed = 3;

    //Methods
    function set_name_speed($name , $speed){
        $this -> name = $name;
        $this -> speed = $speed;
    }
    function get_name_speed(){
        echo 'Name: ' .$this->name;
        echo 'Speed: '. $this->speed .'<br>';
    }
    // function set_speed($speed){
    //     $this -> speed = $speed;
    // }   
    // function get_speed(){
    //     echo 'Speed: '. $this->speed .'<br>';
    // }
}

echo 'Lets understand OOPs by using the following command : <br><br>';
//Here is the object of class player.
echo 'This is player No.1 <br>';
$player1 = new Player ();
//set the player name here.
$player1 -> set_name_speed ('Ahmad Rasheed <br>', 10);
// $player1 -> set_speed (3);
//Display the player name.
echo $player1-> get_name_speed();
// echo  $player1->get_speed().'<br> ';
//Here is another player name

echo 'This is player No.2 <br>';
$player2 = new Player ();
$player2 -> set_name_speed ('Subhnan Rasheed <br>',5);
echo  $player2 -> get_name_speed();
// $player1 -> set_speed (4);
// echo  $player2->get_speed().'<br> ';

//Here is another player
echo 'This is player No.3 <br>';
$player3 = new Player ();
$player3 -> set_name_speed ('Rehman Rasheed <br>',7);
echo  $player3 -> get_name_speed() ;
// $player1 -> set_speed (5);
// echo $player3->get_speed().'<br> ';

//Here is another player
echo 'This is player No.4 <br>';
$player4 = new Player ();
$player4 -> set_name_speed ('Ayoub Khan    <br>', 10);
echo  $player4 -> get_name_speed() ;
// $player1 -> set_speed (6);
// echo $player4->get_speed().'<br> ';





?>