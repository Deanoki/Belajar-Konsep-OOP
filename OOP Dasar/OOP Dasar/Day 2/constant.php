<?php

// Constant / konstanta
// sebuah identifier untuk menyimpan nilai, dan nilai nya tidak akan dapat berubah jika nilai diset 1 maka sampai akhir program akan selalu jadi 1.
// terdapat 2 cara untuk membuat constant di php yaitu:
    // define(), nilai tidak bisa disimpan didalam kelas, harus di set sebagai constanta global, sedangkan.
    // const, nilai dapat disimpan didalam kelas dan cara memanggil nilainya menggunakan static keyword NamaClass::Property(konstantanya)

// Magic Constant 
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

define("NAMA", "Dean Oki");
echo NAMA;
echo "<br>";

const UMUR = 32;
echo UMUR;
echo "<br>";

class Contoh
{
    const NAMA = "Dean OKi";
    
} 
function coba(){
return __FUNCTION__;
}

class coba{
    public $kelas = __CLASS__;
}
echo Contoh::NAMA;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo coba();
echo "<br>";
$obj1= new coba;
echo $obj1->kelas;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;