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

    // Method Return String
    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        // dalam php harus menuliskan $this->VAR
        // agar mengambil variable diluar method.
        return "$this->penulis, $this->penerbit";
    }
}

// Contoh Tumpukan
// $produk1 = new Produk;
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk;
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2->judul);

// Full Property
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// Cara memanggil Method
// echo $produk3->getLabel();

echo "<br>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();