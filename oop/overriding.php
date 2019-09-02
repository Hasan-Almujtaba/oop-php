<?php  

// pembuatan kelas dengan menggunakan keyword "class"
class Produk {

// public = (default) bisa diakses secara bebas
// protected = bisa diakses di class yg sama dan class turunan, serta tidak bisa diakses di luar kelas
// private = hanya bisa diakses di class itu sendiri
	Public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;
		   
// method
	function label() {
		return "$this->penulis, $this->penerbit"; 
	}

// method untuk menampilkan info lengkap produk
	function infoLengkap() {
		$str = "{$this->judul} | {$this->label()} Rp. {$this->harga}";
		return $str;
	}

// construct dijalankan secara otomatis ketika sebuah object diinstansiasi
// dapat mengatur nilai default pada construct
	Public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

}

// Class child/turunan bisa menggunakan property & method dari class parentnya
// Objek terlebih dahulu menggunakan property & method langsung dari class utama (child) 

// Class child/turunan dari class Produk
class Komik extends Produk {
	public $jmlHal;
	public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $jmlHal=0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->jmlHal = $jmlHal;	
		}
	function infoLengkap() {

		// overriding menggunakan "parent::"
		$str = "Komik :  " . parent::infoLengkap() . " - {$this->jmlHal} Halaman ";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;
	public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $waktuMain=0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->waktuMain = $waktuMain;
	}
	function infoLengkap() {
		$str = "Game :  " . parent::infoLengkap() . " - {$this->waktuMain} Jam ";
		return $str;

	}
}


// class untuk mencetak info produk
class CetakInfo {

	// function untuk mencetak produk, Produk di depan $produk maksudnya function cetak hanya akan menerima parameter class Produk
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->label()} | Rp. {$produk->harga}  ";
		return $str;
	}
}

// cara instansi objek menggunakan comstruct
$produk1 = new Komik("Code Geass", "Sunrise", "Sunrise", 25000, 100);
$produk2 = new Game("Fate Grand Order", "TYPE-MOON", "Delight Works", 0, 24);

echo $produk1->infoLengkap();
echo "<br>";
echo $produk2->infoLengkap();

?>