<?php
// define('NAMA', 'Bima');
// // define tidak bisa disimpan didalam kelas tetapi harus diluar class
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

class Coba{
    const NAMA = "Bima";
}
echo Coba::NAMA . "<br/>";
echo __LINE__ . "<br/>";
echo __FILE__ . "<br/>";
echo __DIR__ . "<br/>";

echo "<br/>";
function mantap(){
    return __FUNCTION__;
}
echo mantap() . "<br/>";

class CobaMantap{
    public $kelas = __CLASS__;
}
$obj = new CobaMantap;
echo $obj->kelas;
?>