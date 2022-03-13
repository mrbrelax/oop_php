<?php
echo "====Contoh 1====";
class ContohStatic{
    public static $angka = 1;
    
    public static function halo(){
        return "Hallo " . self::$angka++ . " kali.";
    }
}

echo ContohStatic::$angka;
echo "<br/>";
echo ContohStatic::halo();
echo "<hr/>";
echo ContohStatic::halo();


echo "<br/> <br/>";
echo "====Contoh 2==== <br/>";

class Contoh{
    public $number = 1;

    public function hello(){
        return "Hello " . $this->number++ . " kali . <br/>";
    }
}

$obj = new Contoh;
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();

?>