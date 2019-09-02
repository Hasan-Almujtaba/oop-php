<?php  

// pembuatan kelas dengan menggunakan "class"
class Produk {

// public = (default) bisa diakses secara bebas
	Public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;


	function label() {
		return "$this->penulis, $this->penerbit"; 
	}

// construct dijalankan secara otomatis ketikas sebuah object diinstansiasi
// dapat mengatur nilai default pada construct
	Public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

}

// cara pertama instansi objek
$manga = new Produk("Code Geass", "Sunrise", "Sunrise", 150000);
$komik = new Produk("Batman");

echo "Komik : " . $manga->label();



?>