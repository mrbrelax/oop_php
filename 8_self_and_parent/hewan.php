<?php
require_once 'robot.php';

class robot_hewan extends robot_kerangka{
    public function get_kekuatan(){
        echo ' dia adalah hewan terkuat di darat ';
    }

    // overriding
    public function get_suara()
    {
        return 'suaranya adalah ... ' . $this->suara;
    }

    public function testing(){
        // self and parent
        return parent::get_suara();
    }
}
?>