<?php
require_once 'DebCollector.php';

class Rocky implements DebCollector{
    public function collect(float $owedAmount):float{
        return $owedAmount * 0.65;
    }

    public function __construct(){

    }
    public function foo(){
        
    }

}
?>