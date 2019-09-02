<?php  

// pembuatan kelas dengan menggunakan "class"
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

// construct dijalankan secara otomatis ketikas sebuah object diinstansiasi
// dapat mengatur nilai default pada construct
	Public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
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
$manga = new Produk("Code Geass", "Sunrise", "Sunrise", 150000);
$animasi = new Produk("Batman");
$infomanga = new CetakInfo;

echo "Komik : " . $manga->label();
echo "<br>";
echo $infomanga->cetak($manga);


?>