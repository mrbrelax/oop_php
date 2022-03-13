<?php
require_once 'hewan.php';
// class
class robots{
    // property
    public $suara;
    public $berat;
    
    // methode constructor
    public function __construct($suara, $berat){
        $this->suara = $suara;
        $this->berat = $berat;
    }    

    // methode set
    public function set_suara($suara){
        $this->suara = $suara;
    }
    public function set_berat($berat){
        $this->berat = $berat;
    }

    // methode get
    public function get_suara(){
        return $this->suara;
    }
    public function get_berat(){
        return $this->berat;
    }

}
