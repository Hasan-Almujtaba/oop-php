<?php  

// abstract class merupakan class yang tidak bisa diinstansiasi dan umumnya memiliki abstract method
// abstract class berperan sebagai 'kerangka dasar' bagi class turunannya
// abstract method adalah 'abstract dasar' yang harus diimplementasikan ulang di dalam child class

abstract class Produk {

	private $judul, 
		    $penulis,
		    $penerbit,
		    $harga,
		    $diskon;
		   

	function label() {
		return "$this->penulis, $this->penerbit"; 
	}

	abstract public function getInfoProduk();

	function getInfo() {
		$str = "{$this->judul} | {$this->label()} (Rp. {$this->harga})";
		return $str;
	}

	Public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
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

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}
	public function getDiskon() {
		return $this->diskon;
	}	
	
	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 ) ;
	}

	public function setHarga( $harga ) {
		$this->harga = $harga;
	}

}


class Komik extends Produk {
	public $jmlHal;
	public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $jmlHal=0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->jmlHal = $jmlHal;	
		}
	public	function getInfoProduk() {

		$str = "Komik :  " . $this->getInfo() . " - {$this->jmlHal} Halaman ";
		return $str;
	}

}

class Game extends Produk {
	public $waktuMain;
	public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $waktuMain=0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->waktuMain = $waktuMain;
	}
	function getInfoProduk() {
		$str = "Game :  " . $this->getInfo() . " - {$this->waktuMain} Jam ";
		return $str;

	}
}


class CetakInfoProduk {
	public $daftarProduk = [];

	public function tambahProduk ( Produk $produk ) {
		$this->daftarProduk[] = $produk;

	}

	public function cetak(  ) {
		$str = "Daftar Produk: <br> ";
		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br> ";
		}
		return $str;
	}
}

$produk1 = new Komik("Code Geass", "Sunrise", "Sunrise", 25000, 100);
$produk2 = new Game("Fate Grand Order", "TYPE-MOON", "Delight Works", 0, 24);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk( $produk1 );
$cetakproduk->tambahProduk( $produk2 );
echo $cetakproduk->cetak();

?>