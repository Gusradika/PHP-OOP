<?php

// Study Case
// Jualan Produk
// Comic
// Game

class Produk
{
    // Property
    private $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit";

    // protected $harga = 0; // tidak bisa di print langsung harus melalui turunan

    protected $diskon = 0;
    private $harga = 0; // Hanya bisa dipakai pada class ini saja

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

    // Judul
    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    // Penulis
    public function setPenulis($penulis)
    {
        if (!is_string($penulis)) {
            throw new Exception("Penulis harus String");
        }
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }

    // Penerbit
    public function setPenerbit($penerbit)
    {
        if (!is_string($penerbit)) {
            throw new Exception("Penerbit harus String");
        }
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }


    // Harga
    public function setHarga($harga)
    {
        if (!is_int($harga)) {
            throw new Exception("Harga harus Int");
        }
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    //********************************************************** */


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

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    // public function getHarga()
    // {
    //     return $this->harga;
    // }

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

echo $produk2->setDiskon(50);
echo "<br>";
echo $produk2->getHarga();
echo "<hr>";
echo $produk1->setJudul("GTA");
echo $produk1->setPenulis("AdityaKesuma");
echo $produk1->setPenerbit("github.com/Gusradika");
echo $produk1->getJudul() . " " . $produk1->getPenulis() . " " . $produk1->getPenerbit();