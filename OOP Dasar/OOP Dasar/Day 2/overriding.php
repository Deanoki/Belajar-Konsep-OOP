<?php

// ini adalah kelas yang memiliki nama produk
class Produk{
    // ini property yang ada didalam kelas produk
    public $judul, $penulis, $penerbit, $harga;

    // ini method constructor yang ada di kelas produk
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // ini method dari kelas produk  
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
     // ini method dari kelas produk  
    public function getInfoProduk(){
        $str = "{$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
        
        return $str;
    }
}

// ini kelas komik child dari produk dengan menambahkan extends
class Komik extends Produk{
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
     parent::__construct($judul, $penulis, $penerbit, $harga );
     
     $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        // fungsi parent ini untuk mengambil method atau properti dari kelas produk atau parentnya dan :: itu adalah method static
        $str = "Komik : " . parent::getInfoProduk() . " | {$this->jmlHalaman} Halaman)";

        return $str;
    }
}
// ini kelas game child dari produk dengan menambahkan extends
class Game extends Produk{
    public $waktuMain;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
     parent::__construct($judul , $penulis , $penerbit , $harga );
     
     $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        // fungsi parent ini untuk mengambil method atau properti dari kelas produk atau parentnya dan :: itu adalah method static
        $str = "Game : " . parent::getInfoProduk() . " | {$this->waktuMain} Jam)";

        return $str;
    }  
}

// ini kelas cetak info produk 
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->getLabel()} | {$produk->penerbit} | (Rp. {$produk->harga})";
        return $str;
    }
}

// ini objek yang menginisiasi dari kelas produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 450000, 100);
$produk2 = new Game("Zombie", "zombieman", "Umbrella.CORP", 145000, 50);

$infoProduk1= new CetakInfoProduk();




echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();