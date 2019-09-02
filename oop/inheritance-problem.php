<?php  

// pembuatan kelas dengan menggunakan "class"
class Produk {

// public = (default) bisa diakses secara bebas
// protected = bisa diakses di class yg sama dan class turunan, serta tidak bisa diakses di luar kelas
// private = hanya bisa diakses di class itu sendiri
	Public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHal,
		   $waktuMain,
		   $tipe;

// method
	function label() {
		return "$this->penulis, $this->penerbit"; 
	}

// method untuk menampilkan info lengkap produk
	function infoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->label()} Rp. {$this->harga}";
		// menentukan apakah produk menggunakan halaman/waktu main
		if ($this->tipe === "komik") {
			$str .= " - {$this->jmlHal} Halaman";
		}
		elseif($this->tipe === "game") {
			$str .= " - {$this->waktuMain} Jam ";
		}

		return $str;
	}

// construct dijalankan secara otomatis ketika sebuah object diinstansiasi
// dapat mengatur nilai default pada construct
	Public function __construct( $judul="unknown", $penulis="unknown", $penerbit="unknown", $harga=0, $jmlHal=0, $waktuMain=0, $tipe ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHal = $jmlHal;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
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
$produk1 = new Produk("Code Geass", "Sunrise", "Sunrise", 25000, 100, 0, "komik");
$produk2 = new Produk("Fate Grand Order", "TYPE-MOON", "Delight Works", 0, 0, 24, "game");

echo $produk1->infoLengkap();
echo "<br>";
echo $produk2->infoLengkap();

?>