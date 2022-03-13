<?php
class Post{
    public $title, $body;

    public function __construct()
    {
        $this->title = "ini isi judulnya";
        $this->body = "Ini isi nya";
    }
    public function getTitle(){
        return $this->title;
    }
    public function getBody(){
        return $this->body;
    }
}
?>