<?php
// require_once 'CollectionAgency.php';
require_once 'Rocky.php';
require_once 'DebCollectionService.php';

// $collector = new CollectionAgency();
$service = new DebCollectionService();

// echo 'Collection Agency $' . $collector->collect(100) . PHP_EOL;
// echo $service->collectDebt(new CollectionAgency()) . PHP_EOL;
echo $service->collectDebt(new Rocky()) . PHP_EOL;
?>