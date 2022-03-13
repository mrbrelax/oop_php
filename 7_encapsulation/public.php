<!-- 
encapsulation terdiri dari 3 yaitu :
- public,- protected, - private
 -->

<?php
// class
class manusia{
    // property
    public $nama;
    public $warna;
    // methode manusia
    public function tampilkan_nama(){
        return 'Nama saya adalah Mr.B';
    }
}
// instansiasi class manusia
$manusia = new manusia();

// memanggil methode tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

?>
<!-- 
Bisa baca lebih lanjutnya disini :
https://www.malasngoding.com/php-oop-part-4-pengertian-enkapsulasi-public-private-protected/
 -->