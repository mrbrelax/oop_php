<?php
require_once('robot.php');

$robot1 = new robot('ngik ngik', 20);

$robot1->set_berat(30);
echo 'bunyinya ... ' . $robot1 -> get_suara() . "<br/>";

// inheritance / pewarisan
$robothewan = new robot_hewan('guk guk', 10);
echo $robothewan->get_kekuatan();
?>