<?php 

// constant berfungsi untuk menampung nilai, bedanya dengan variable adalah nilai pada constant tetap sampai program selesai dijalankan

// constant biasa ditulis dengan huruf kapital semua

// cara pertama menggunakan constant
define("NAMA", "Hasan");
echo NAMA;
echo "<br>";
// cara kedua
// const bisa disimpan di dalam kelas
const UMUR = 18;
echo UMUR;
echo "<hr>";

// penggunaan const dalam class
class Coba {
	const ALAMAT = 'Bojong Gede';
}
echo Coba::ALAMAT;


?>