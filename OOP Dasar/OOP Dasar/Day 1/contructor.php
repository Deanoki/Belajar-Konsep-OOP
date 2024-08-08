<!-- belajar OOP dasar class dan objek -->
<?php

// ini class atau blueprint yang menyimpan prop dan method
class Produk{
    // property
        // property merupakan representasikan data atau keadaan dari sebuah objek.
        // variabel yang ada di dalam object (member variable)
        // sama seperti variabel didalam php, ditambah dengan visibility didepannya (public, private dan protected)
    // contoh prop
    public $judul , 
           $penulis ,
           $penerbit,
           $harga ;


    // method
        // merepresentasikan perilaku dari sebuah objek
        // function yang ada didalam object
        // sama seperti function didalam php, ditambah dengan visibility didepannya (public, private dan protected)
        // jika ingin mengambil variable atau property yang berada diluar lingkup funcion maka gunakan ini didepan variabel $this->, jika tidak maka variabel akan menjadi variabel baru yang hanya ada di dalam function method tersebut.
    
    // Contstructor 
    // construktor adalah method yang spesial yang ada didalam kelas.
    // constructor akan dijalankan secara otomatis setelah kelas dibuat instansiasi atau objeknya.
    // contructor adalah magic method
    // constructor akan menerima parameter untuk mengisi properti yang ada di kelas

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }
}
// objek,
// objek adalah instance yang didefinisikan dari class
// dapat membuat banyak objek dengan 1 class
// membuat objek dengan menggunakan keyword new
// contoh

$produk1 = new Produk("Zombie","zombieman", "Umbrella.corp", 150000);
$produk2 = new Produk("Naruto","Masashi Kishimoto", "Shounen Jump", 50000);
$produk3 = new Produk("hitachi");

echo "Komik = " . $produk1->getLabel();

echo "<hr>";

echo "Game = " . $produk2->getLabel();

echo "<hr>";

var_dump($produk3);

