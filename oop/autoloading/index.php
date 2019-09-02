<?php 

require_once 'App/init.php';

$produk1 = new Komik("Code Geass", "Sunrise", "Sunrise", 25000, 100);
$produk2 = new Game("Fate Grand Order", "TYPE-MOON", "Delight Works", 0, 24);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk( $produk1 );
$cetakproduk->tambahProduk( $produk2 );
echo $cetakproduk->cetak();

 ?>