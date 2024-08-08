<?php
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
