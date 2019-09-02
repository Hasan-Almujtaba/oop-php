<?php  

class Produk {

	Public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;


	function label() {
		echo "Buku ini berjudul " . $this->judul ;
	}

}

// cara pertama instansi objek
$manga = new Produk();
$manga->judul = "Barakamon";
$manga->penulis = "unknown";
$manga->penerbit = "unknown";
$manga->episode = "unknown";

echo $manga->label();



?>