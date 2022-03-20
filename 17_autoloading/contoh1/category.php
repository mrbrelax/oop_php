<?php
class Category{
    public $name;

    public function __construct()
    {
        $this->name = "Berita";
    }

    public function getName(){
        return $this->name;
    }
}
?>