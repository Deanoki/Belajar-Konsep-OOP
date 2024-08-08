<?php

// Autoloading
// memanggil class (file) tanpa harus menggunakan 'require'
// 

// Interface
// kelas abstrak yang sama sekali tidak memiliki implementasi
// Murni merupakan template untuk kelas turunannya
// Tidak boleh memiliki properti, hanya deklarasi method saja
// semua method harus dideklarsikan dengan visibility public
// boleh mendeklarasikan method __construct()
// satu kelas boleh mengimplementasikan banyak interface
// dengan menggunakan type-hinting dapat melakukan "Dependency injection"
// pada akhirnya akan mencapai polymorphism
// cara membuat turunan dari interface ini dengan menggunakan IMPLEMENTS sebagai berikut contohnya Class namaKelas implements namaKelasParentnya

// Abstract Class
// abstract class tidak dapat di instansiasi
// kelas abstrak dapat disebut kelas abstrak itu sendiri
// mendefinisikan interface untuk kelas lain yang menjadi turunannya
// berperan sebagai 'kerangka dasar' untuk kelas turunanya
// memiliki minimal 1 method abstrak    
// digunakan dalam 'pewarisan'/ inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turunannya
// semua kelas turunannya, harus mengimplementasikan method abstrak yang ada dikalas abstraknya
// kelas abstrak boleh memiliki properti/method reguler
// kelasa abstrak boleh memiliki properti/static method

// kenapa menggunakan kelas abstrak?
// merepresentasikan ide atau konsep dasar rancangan
// konsep object orientation "Composition over Inheritance" sebaiknya kita melakukan komposisi daripada menggunakan inheritance begitu saja
// salah satu cara menerapkan polimorphism
// sentralisasi logic
// mempermudah pengerjaan tim


interface InfoProduk
{
    public function getInfoProduk();
}

// ini adalah kelas yang memiliki nama produk
abstract class Produk{
    // ini property yang ada didalam kelas produk
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

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
    abstract public function getInfo();

    

    public function setJudul( $judul)
    {
       return $this->judul = $judul;
    }
    
    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis( $penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setpenerbit( $penerbit)
    {
        $this->penerbit = $penerbit;
    }
    
    public function getpenerbit( )
    {
       return $this->penerbit;
    }

    public function setDiskon( $diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon( )
    {
       return $this->diskon;
    }
    
    public function setHarga( $harga )
    {
        $this->harga = $harga;
    }
    
    public function getHarga()
    {
        return $this->harga - ( $this->harga * $this->diskon / 100) ;
    }
}

// ini kelas komik child dari produk dengan menambahkan extends
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
     parent::__construct($judul, $penulis, $penerbit, $harga );
     
     $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
        
        return $str;
    }

    public function getInfoProduk()
    {
        // fungsi parent ini untuk mengambil method atau properti dari kelas produk atau parentnya dan :: itu adalah method static
        $str = "Komik : " . $this->getInfo() . " | {$this->jmlHalaman} Halaman)";

        return $str;
    }
    
    
}
// ini kelas game child dari produk dengan menambahkan extends
class Game extends Produk implements InfoProduk{
    public $waktuMain;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
     parent::__construct($judul , $penulis , $penerbit , $harga );
     
     $this->waktuMain = $waktuMain;
    }
    
    public function getInfo(){
        $str = "{$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
        
        return $str;
    }

    public function getInfoProduk()
    {
        // fungsi parent ini untuk mengambil method atau properti dari kelas produk atau parentnya dan :: itu adalah method static
        $str = "Game : " . $this->getInfo() . " | {$this->waktuMain} Jam)";

        return $str;
    }  

}

// ini kelas cetak info produk 
class CetakInfoProduk{
    public $daftarProduk= array();
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "Daftar Produk : <br><hr>";

        foreach ($this->daftarProduk as $p) 
        {
            $str .= "- {$p->getInfoProduk()} <hr>";
        }


        return $str;
    }
}


// ini objek yang menginisiasi dari kelas produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 450000, 100);
$produk2 = new Game("Zombie", "zombieman", "Umbrella.CORP", 145000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();