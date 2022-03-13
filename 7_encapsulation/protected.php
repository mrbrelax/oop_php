<!-- 
encapsulation terdiri dari 3 yaitu :
- public,- protected, - private
-->

<?php
// class protected_manusia
class protected_manusia{
    // menentukan property dengan protected
    protected $nama = 'Mr.B Relax';

    // methode protected
    protected function nama(){
        return 'Nama saya ' . $this->nama;
    }

    public function tampilkan_nama(){
        return $this->tampilkan_nama;
    }
}

// instansiasi class protected_manusia
$manusia = new protected_manusia();
// memanggil methode public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

?>