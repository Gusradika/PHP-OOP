<?php

// Study Case
// Jualan Produk
// Comic
// Game

class Produk
{
    // Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // Method Constructor
    // kenapa menggunakan __ (underline)
    // dalam php __ berarti adalah method Special
    // dari PHP
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        // isi dari Construct akan otomatis di jalankan ketika inisiasi Object
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        // dalam php harus menuliskan $this->VAR
        // agar mengambil variable diluar method.
        return "$this->penulis, $this->penerbit";
    }

    // Inheritance Method
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Child Class
// Child Kelas akan menggunakan properti dari parent Class
// Child kelas akan digunakan dahulu variable nya
// jika tidak ditemukan variablenya maka program akan mencari kedalam parent class
class Komik extends Produk
{
    public $jmlHalaman;

    // Override Method
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Child Class
class Game extends Produk
{
    public $waktuMain;

    // Override Method
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str =
            "Game :" . parent::getInfoProduk() . " (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

// Cetak Object Type
class CetakInfoProduk
{
    // Param 1 hanya menerima class yang bernilai Produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

// Full Property
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Method Inheritance
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();