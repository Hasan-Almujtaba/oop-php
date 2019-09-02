<?php 

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

 ?>