<?php
class Motor{
    public $merkMotor;      
    protected $kecepatanMax;  
    private  $bensin;

    public function __construct(
        $merkMotor='Honda',                    
        $kecepatanMax='120',                    
        $bensin='Pertamax')
    {
        $this->merkMotor = $merkMotor;
        $this->kecepatanMax = $kecepatanMax;
        $this->bensin = $bensin;
    }

    public function setMerkMotor($merkMotor){
        $this->merkMotor = $merkMotor;
    }

    public function getMerkMotor(){
        return $this->merkMotor;
    }

    public function setKecepatan($kecepatanMax){
        $this->kecepatanMax = $kecepatanMax;
    }

    public function getKecepatan(){
        return $this->kecepatanMax;
    }

    public function setBensin($bensin){
        $this->bensin = $bensin;
    }

    public function getBensin(){
        return $this->bensin;
    }
    
}

$motor = new Motor();
echo 'Merk Motornya : ' . $motor->merkMotor . ' Kecepatannya : ' . $motor->getkecepatan() . ' Bahan Bakarnya : ' . $motor->getBensin();

?>

<!-- 
Bisa baca disini :
https://kodingin.com/memahami-visibility-access-modifier-php-oop/
 -->