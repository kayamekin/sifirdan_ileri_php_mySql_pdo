<?php

function yukle($sinif)
{
    $dizin  = __DIR__ . "/siniflar/";
    $dosya  = $dizin . $sinif . ".php";
    include $dosya;
}

spl_autoload_register("yukle");
$ogretmen = new ogretmen();
$ogrenciler = new ogrenciler();








?>