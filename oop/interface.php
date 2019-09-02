<?php  

// interface merupakan implementasi yang harus tersedia dalam object
// class yang memakai interface tertentu harus menerapkan method yang ada pada interface tersebut
// method interface harus diset public
// interface bisa diturunkan menggunakan 'extends'
// interface diimplementasikan menggunakan 'implements'
// interface bisa memiliki constanta
// sebuah class bisa memiliki banyak constanta

interface InfoProduk {
		public function getInfoProduk();
}

abstract class Produk {

	protected $judul, 
		    $penulis,
		    $penerbit,
		    $harga,
		    $diskon;
		   

	function label() {
		return "$this->penulis, $this->penerbit"; 
	}


	abstract function getInfo();

	Public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	
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


class Komik extends Produk implements InfoProduk {
	public $jmlHal;
	public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $jmlHal=0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->jmlHal = $jmlHal;	
		}
	public	function getInfoProduk() {

		$str = "Komik :  " . $this->getInfo() . " - {$this->jmlHal} Halaman ";
		return $str;
	}

	function getInfo() {
		$str = "{$this->judul} | {$this->label()} (Rp. {$this->harga})";
		return $str;
	}	

}

class Game extends Produk implements InfoProduk {
	public $waktuMain;
	public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $waktuMain=0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->waktuMain = $waktuMain;
	}
	function getInfoProduk() {
		$str = "Game :  " . $this->getInfo() . " - {$this->waktuMain} Jam ";
		return $str;

	}

	function getInfo() {
		$str = "{$this->judul} | {$this->label()} (Rp. {$this->harga})";
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