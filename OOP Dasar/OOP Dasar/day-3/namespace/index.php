<?php

require_once('App/init.php');


// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 450000, 100);
// $produk2 = new Game("Zombie", "zombieman", "Umbrella.CORP", 145000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

use App\Service\User as serviceUser;
use App\Produk\User as produkUser;

new serviceUser();
echo "<br>";
new produkUser();
