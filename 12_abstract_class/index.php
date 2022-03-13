<?php
abstract class Car{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car{
    public function intro() : string{
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Volvo extends Car{
    public function intro() : string{
        return "Proud to be Swedish! I'm a $this->name";
    }
}

class Citreon extends Car{
    public function intro() : string{
        return "French extravagance! I'm a $this->name!";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br/>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br/>";

$citreon = new Citreon("Citreon");
echo $citreon->intro();

?>

<!-- 
Tutorialnya bisa dibaca disini :
https://www.w3schools.com/php/php_oop_classes_abstract.asp
 -->