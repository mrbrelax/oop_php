<?php
require_once 'hewan.php';
require_once 'robot.php';

$hewan1 = new robot_kerangka('ngik ngok', 30);

$robot_hewan = new robot_hewan('guk guk guk', 40);
echo $robot_hewan->testing();

?>