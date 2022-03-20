<?php
require_once 'DebCollector.php';
class CollectionAgency implements DebCollector{
    public function __construct(){

    }

    public function foo(){
        
    }

    public function collect(float $owedAmount):float{
        $guaranteed = $owedAmount * 0.5;
        return mt_rand($guaranteed, $owedAmount);
    }
}

?>