<?php 

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


 ?>