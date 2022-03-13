<?php
class robot{
    public $suara;
    public $berat;

    // metode set
    public function set_suara($suara){
        $this->suara = $suara;
    }
    // metode get
    public function get_suara(){
        return $this->suara;
    }
}

$robot1 = new robot;
$robot2 = new robot;

$robot1->set_suara('ngik ngik');
echo 'suara robotnya ... ' . $robot1->get_suara(); 

$robot2->set_suara('titu titu');
echo ' suarat robot ke 2 .. ' . $robot2->get_suara();

?>