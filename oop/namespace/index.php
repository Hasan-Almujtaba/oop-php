<?php 

// namespace merupakan sebuah cara untuk mengenkapsulasi class
// menulis namespace
// namespace Vendor\Namespace\SubNamespace

require_once 'App/init.php';

// $produk1 = new Komik("Code Geass", "Sunrise", "Sunrise", 25000, 100);
// $produk2 = new Game("Fate Grand Order", "TYPE-MOON", "Delight Works", 0, 24);

// $cetakproduk = new CetakInfoProduk();
// $cetakproduk->tambahProduk( $produk1 );
// $cetakproduk->tambahProduk( $produk2 );
// echo $cetakproduk->cetak();

// alias untuk memudahkan memanggil namespace
use APP\Service\User as ServiceUser;
use APP\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();








 ?>