<?php
echo "I am PHP";

class Player {
public $name;
public $speed=5;

function Player_name($name){
    $this->name=$name;
}
function getPlayer_name(){
return $this->name;
}
}
echo "Let's Go with PHP<br>";
$Waqar=new Player();
$Waqar->Player_name("WaqarKhan");
echo $Waqar->getPlayername();

//echo $Waqar;
?>
