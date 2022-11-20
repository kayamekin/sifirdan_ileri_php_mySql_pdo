<?php

class A
{
    const sabit = " <b>merhabalar</b>  <br><br>";
    public static $isim = "php dersleri" . " " . "mekin";
    public static function yaz()
    {
        echo "ibrahim çevrük -2";
    }
}
echo A::sabit;
echo A::$isim. "<br>";

A::yaz();
