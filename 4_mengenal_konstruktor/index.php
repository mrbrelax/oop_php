<?php
require_once('robot.php');

$robot1 = new robot('ngik ngik', 20);
$robot2 = new robot('titu titu', 30);

$robot1->set_berat(30);
echo 'bunyi robotnya .. ' . $robot1->get_suara() . "<br/>";
echo 'beratnya ... ' . $robot2->get_berat();
?>