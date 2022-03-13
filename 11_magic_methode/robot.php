<?php
require_once 'hewan.php';
class robotorang{
    public $suara;
    public $berat;

    public function __construct($suara, $berat)
    {
        $this->suara = $suara;
        $this->berat = $berat;
    }
    public function set_suara($suara){
        $this->suara = $suara;
        // methode chaining
        return $this;
    }
    public function get_suara(){
        return $this->suara;
    }
    public function set_berat($berat){
        $this->berat = $berat;
    }
    public function get_berat(){
        return $this->berat;
    }
    // magic methode
    public function __toString()
    {
        echo ' ini adalah magic methode ';
    }
}

?>