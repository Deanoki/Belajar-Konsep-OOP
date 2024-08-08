<!-- belajar OOP dasar class dan objek -->
<?php

// ini class atau blueprint yang menyimpan prop dan method
class produk{
    // property
        // property merupakan representasikan data atau keadaan dari sebuah objek.
        // variabel yang ada di dalam object (member variable)
        // sama seperti variabel didalam php, ditambah dengan visibility didepannya (public, private dan protected)
    // contoh prop
    public $judul = "judul", 
           $penulis = "",
           $penerbit = "penerbit",
           $harga = 0;


    // method
        // merepresentasikan perilaku dari sebuah objek
        // function yang ada didalam object
        // sama seperti function didalam php, ditambah dengan visibility didepannya (public, private dan protected)
        // jika ingin mengambil variable atau property yang berada diluar lingkup funcion maka gunakan ini didepan variabel $this->, jika tidak maka variabel akan menjadi variabel baru yang hanya ada di dalam function method tersebut.

    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }
}
// objek,
// objek adalah instance yang didefinisikan dari class
// dapat membuat banyak objek dengan 1 class
// membuat objek dengan menggunakan keyword new
// contoh
// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

$produk2 = new produk();
$produk2->judul = "Zombie";
$produk2->penulis = "zombieman";
$produk2->penerbit = "Umbrella.corp";
$produk2->harga = 150000;
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shounen jump";
$produk3->harga = 30000;

echo "Komik = " . $produk3->getLabel();

echo "<hr>";

echo "Game = " . $produk2->getLabel();

