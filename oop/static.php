<?php  


// nilai static akan selalu tetap dan tidak direset
class Contoh {
	// property dengan keyword static bisa dipakai tanpa instansiasi
	public static $angka = 1;
	// method dengan keyword static bisa dipakai tanpa instansiasi
	public static function halo() {
		// self:: digunakan untuk mengakses property static, $this tidak bisa dipakai karena untuk memakainya harus melakukan instansiasi terlebih dahulu
		return "halo " . self::$angka++ . " kali";
	}
}

// cara menggunakan property/method static adalah dengan menambahkan "::" setelah nama class dan diikuti dengan nama propertynya
echo Contoh::$angka;
echo "<br>";
echo Contoh::halo();
echo "<hr>";
echo Contoh::halo();

?>