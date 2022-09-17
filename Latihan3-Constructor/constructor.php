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
    private function __construct($judul, $penulis, $penerbit, $harga)
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

// Full Property
$produk3 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();