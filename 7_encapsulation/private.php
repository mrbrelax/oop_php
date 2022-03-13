<!-- 
encapsulation terdiri dari 3 yaitu :
- public,- protected, - private
-->

<?php
// class
class private_manusia{
    // menentukan property dengan private
    private $nama = 'Mr.B Relax';

    // methode public
    public function tampilkan_nama(){
        return 'Nama saya ' . $this->nama;
    }
}
// instanisasi class private_manusia
$manusia = new private_manusia();

// memanggil methode public tampilkan_nama dari class private_manusia
echo $manusia->tampilkan_nama();
?>

<!-- 
Bisa baca lebih lanjutnya disini :
https://www.malasngoding.com/php-oop-part-4-pengertian-enkapsulasi-public-private-protected/
 -->