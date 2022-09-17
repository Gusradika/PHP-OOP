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
}

// Cetak Object Type
class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

// Full Property
$produk1 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "<br>";

// Object Type
$infoProduk1 = new CetakInfoProduk($produk1);
$infoProduk1 = new CetakInfoProduk($produk2);