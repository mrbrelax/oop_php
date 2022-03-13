<?php
require_once 'robot.php';
require_once 'orang.php';
require_once 'hewan.php';

$robot = new robotorang('testing', 10);
$robot->set_suara('Okey Berhasil')->set_berat(20);

echo $robot->suara . ' - ' . $robot->berat;
?>