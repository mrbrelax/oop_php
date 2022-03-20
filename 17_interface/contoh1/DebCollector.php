<?php
require_once 'AnotherInterface.php';
require_once 'SomeOtherInterface.php';

interface DebCollector extends AnotherInterface, SomeOtherInterface{
    public const MY_CONSTANT = 1;
    public function __construct();
    public function collect(float $owedAmount): float;
};
?>