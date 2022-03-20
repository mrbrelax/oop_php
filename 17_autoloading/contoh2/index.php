<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);
echo $cetakproduk->cetak();


?>