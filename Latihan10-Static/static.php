<?php


class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return "halo " . self::$angka++ . " kali.";
    }
}

echo ContohStatic::$angka . "<br>";
echo ContohStatic::halo() . "<br>";
echo ContohStatic::halo() . "<br>";
echo ContohStatic::halo() . "<br>";
echo "<hr>";


// Static method akan menyimpan nilai dan meneruskannya
class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "halo " . self::$angka++ . " kali.";
    }
}

$obj = new Contoh();
echo $obj->halo() . "<br>";
echo $obj->halo() . "<br>";
echo $obj->halo() . "<br>";

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo() . "<br>";
echo $obj2->halo() . "<br>";
echo $obj2->halo() . "<br>";