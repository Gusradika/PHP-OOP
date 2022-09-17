<?php
// Constant
// define(name, Value);

function testing()
{
    return __FUNCTION__;
}

class testing2
{
    public $kelas = __CLASS__;
}

// Variable Constant tidak perlu $ untuk dijalankan.

// cara 1
define('NAMA', 'ADITYA KESUMA');
echo NAMA;

echo "<br>";

// cara 2

const UMUR = 32;
echo UMUR;

// Define tidak dapat di simpan didalam Class
// maka harus menggunakan const
class Coba
{
    const NAMA1 = 'ADITYA KESUMA 1';
}

echo "<br>";
echo Coba::NAMA1;

// Magic Constant
//LINE
echo "<br>";
echo __LINE__; // akan menampilkan nilai Baris Syntax.
//FILE
echo "<br>";
echo __FILE__; // akan menampilkan aLamat file.
//FUNCTION
echo "<br>";
echo testing(); // fungsi yang mengembalikan __FUNCTION__. akan menampilkan fungsi apa.
//CLASS
$kelas = new testing2;
echo $kelas->kelas;