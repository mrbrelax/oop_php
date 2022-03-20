<?php
require_once 'Rocky.php';

class DebCollectionService{
    public function collectDebt(DebCollector $collector){
        $owedAmount  = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}

?>