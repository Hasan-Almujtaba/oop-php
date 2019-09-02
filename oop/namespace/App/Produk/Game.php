<?php 

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

 ?>