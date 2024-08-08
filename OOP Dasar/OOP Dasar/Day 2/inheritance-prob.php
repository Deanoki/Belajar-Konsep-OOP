<?php

// ini adalah kelas yang memiliki nama produk
class Produk{
    // ini property yang ada didalam kelas produk
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

    // ini method constructor yang ada di kelas produk
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // ini method dari kelas produk  
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
     // ini method dari kelas produk  
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 450000, 100, 0, "Komik");
$produk2 = new Produk("Zombie", "zombieman", "Umbrella.CORP", 145000, 0, 50, "Game");

$infoProduk1= new CetakInfoProduk();




echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();