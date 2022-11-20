<?php

// içerik ekleme dosya ekleme işlemi

$zip = new ZipArchive();
$zipAdi = getcwd() . "/ikinciders.zip";
$zipol  = $zip->open($zipAdi, ZipArchive::CREATE);

if ($zipol == true) {

    $bilgi1 = "ibrahim çevrük\r\nibo çevrük";
    $bilgi2 = "ibrahim var\r\nibo yok";
    $zip->addFromString("bilgi1/bilgi.txt", $bilgi1);
    $zip->addFromString("bilgi2/bilgi.txt", $bilgi2);


    echo "tamamlandı";
    $zip->close();
} else {
    $zip->close();

    echo "başarısız";
}
