<?php

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