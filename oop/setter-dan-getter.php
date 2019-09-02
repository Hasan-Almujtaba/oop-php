<?php  

// pembuatan kelas dengan menggunakan keyword "class"
class Produk {

// public = (default) bisa diakses secara bebas
// protected = bisa diakses di class yg sama dan class turunan, serta tidak bisa diakses di luar kelas
// private = hanya bisa diakses di class itu sendiri
	private $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon;
		   
// method
	function label() {
		return "$this->penulis, $this->penerbit"; 
	}

// method untuk menampilkan info lengkap produk
	function infoLengkap() {
		$str = "{$this->judul} | {$this->label()} (Rp. {$this->harga})";
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

	// setter & getter
	
	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 ) ;
	}

	public function setHarga( $harga ) {
		$this->harga = $harga;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}
	public function getDiskon() {
		return $this->diskon;
	}	

	public function getJudul() {
		return $this->judul;
	}	

	public function setJudul( $judul ) {
		$this->judul = $judul;
	}

	public function getPenulis() {
		return $this->penulis;
	}	

	public function setPenulis( $penulis ) {
		$this->penulis = $penulis;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}	

	public function setPenerbit( $penerbit ) {
		$this->penerbit = $penerbit;
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
	public	function infoLengkap() {

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
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();
echo "<hr>";

$produk1->setJudul("Code Breaker");
echo $produk1->getJudul();
?>