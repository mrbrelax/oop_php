<?php
require_once 'robot.php';
require_once 'hewan.php';
$robot1 = new robots('ngik ngok', 40);

$robot1->set_suara(30);
echo 'bunyi robotnya ... ' . $robot1->get_suara() . "<br/>";

$robothewan = new robot_hewan('guk guk guk', 50);
echo $robothewan->get_suara_hewan();
?>