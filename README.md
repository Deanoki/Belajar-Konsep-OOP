1. Apa itu OOP?
	oop merupakan paradigma atau konsep pemograman yang berorientasi pada objek, yang mana semua kelas yang akan dibuat akan di inisasikan menjadi sebuah objek

2. Apa itu Class?
	- Class merupakan indentifier dari sebuah kelas atau template yang nantinya akan di inisiasikan menjadi sebuah objek.
	- Didalam kelas memiliki property dan method dengan berbagai visibility yang berbeda-beda.
	- Class dapat memiliki child.

3. Apa itu Object?
	- sebuah variable yang menampilkan template atau data dari kelas

4. Apa itu Child atau metode Inheritance (pewarisan)?
	- inheritance merupakan perpanjangan atau perluasan dari method yang ada pada parentnya.
	-inheritance juga dapat memiliki karakter (properti atau method) dari parentnya dan juga setiap child juga bisa memiliki behavior nya sendiri.

5. Apa itu Constant?
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

6. Apa itu Setter dan Getter?
	// Setter dan Getter adalah method set & get
	// setter dan getter untuk mengatur dan membantu penyerahan data sesuai dengan visibilitynya
	// dapat digunakan dengan magic method __set() dan __get()

6. Apa itu Visibility?
	// visibility
	// konsep yang mengatur akses dari properti dan method pada sebuah objek
	// ada 3 jenis visibility : public, private dan protected
	    // public dpat digunakan dimana saja bahkan diluar kelas
	    // protected hanya dapat digunakan dalam sebuah kelas beserta turunannya
	    // private hanya dapat digunakan didalam sebuah kelas tertentu saja

	// why use visibility?
	    // hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
	    // menentukan kebutuhan yang jelas untuk object
	    // memberikan kendali pada kode untuk menghindari "Bug"

7. Apa itu Static keyword?
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

8. Apa itu Abstract?
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

9. Apa itu Interface?
	// kelas abstrak yang sama sekali tidak memiliki implementasi
	// Murni merupakan template untuk kelas turunannya
	// Tidak boleh memiliki properti, hanya deklarasi method saja
	// semua method harus dideklarsikan dengan visibility public
	// boleh mendeklarasikan method __construct()
	// satu kelas boleh mengimplementasikan banyak interface
	// dengan menggunakan type-hinting dapat melakukan "Dependency injection"
	// pada akhirnya akan mencapai polymorphism
	// cara membuat turunan dari interface ini dengan menggunakan IMPLEMENTS sebagai berikut contohnya Class namaKelas implements namaKelasParentnya

10. Apa itu Autoloading?
	// memanggil class (file) tanpa harus menggunakan 'require'
	// contoh penggunaan autoloading agar tidak melakukan setting require disetiap file
	spl_autoload_register(function ($class)
	{
		require_once "Produk/" . $class . ".php";
	});

10. Apa itu Namespace?
	// sebuah cara untuk mengelompokan program kedalam sebuah Package tersendiri atau 'Encapsulation'.
	// Karena PHP tidak mengizinkan kita untuk membuat 2 kelas dengan nama yang sama.
	// cara penulisan namespace itu ada disebelah tag "<?php" dengan contoh penulisan sebagai berikut
	// <?php App\Namespacenya\Subnamespacenya;
