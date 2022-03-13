<?php
// class
class robot{
    // property
    public $suara = 'ngik ngik';
    public $berat = 30;
}
// keyword dengan menggunakan kata kunci 'new'
$robot1 = new robot;

echo 'suara robotnya .. ' . $robot1->suara . ' beratnya ' . $robot1->berat;
?>