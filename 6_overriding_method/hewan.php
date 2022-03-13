<?php
require_once 'robot.php';
class robot_hewan extends robots {
    public function get_kekuatan(){
        echo ' dia hewan terkuat di darat ';
    }

    // overriding methode
    public function get_suara_hewan(){
        return 'suaranya adalah ... ' . $this->suara;
    }
}
?>

<!-- 
Overriding methode adalah nilai yang mengubah dari aslinya dengan menggunakan nama methode
yang sama tapi isi fungsinya berbeda
 -->