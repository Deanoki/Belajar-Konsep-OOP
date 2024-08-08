<?php

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