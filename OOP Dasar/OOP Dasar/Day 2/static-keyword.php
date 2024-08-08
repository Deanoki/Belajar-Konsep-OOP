<?php
// static keyword
// kita bisa mengakses properti dan method dalam kontek class dengan menggunakan static properti dan static method

// Setter dan Getter (method set & get)
// setter dan getter untuk mengatur dan membantu penyerahan data sesuai dengan visibilitynya
// dapat digunakan dengan magic method __set() dan __get()
// untuk penggunaan static keyword tidak bisa menggunakan $this karena ini hanya dapat digunakan ketika object telah terinisiasi oleh karena itu sebagai pengganti $this kita gunakan self::

// untuk apa kita gunakan static keyword dan kapan?
// member yang terikat dengan class bukan dengan objek
// nilai static akan selalu tetap walau sudah di instance berulang kali
// membuat kode menjadi "procedural"
// biasanya digunakan untuk membuat fungsi bantuan/helper
// atau digunakan diclass utility pada framework

class ContohStatic 
{
    public static $angka = 1;
    
    public static function halo()
    {
       return "Halo " . self::$angka++ . " kali." ;
    }
}

class Contoh
{
    public static $angka = 1;

    public function hallo()
    {
        return "halo " . self::$angka++ . "kali. <br>";
    }
    
}

echo ContohStatic::$angka;
echo"<hr>";
echo ContohStatic::halo();
echo"<hr>";
echo ContohStatic::halo();
echo"<hr>";
echo "contoh 2";
echo"<hr>";
$obj = new Contoh;
echo Contoh::$angka;
echo"<hr>";
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();