<?php

// zipten sadece tek bir dosya çıkartma

$zip = new ZipArchive();
$isim = getcwd() . "/ders.zip";
$cikart = getcwd() . "/yedek/";
$isle = array("bilgi1/bilgi.txt");

if ($zip->open($isim) === TRUE) {
    $zip->extractTo($cikart, $isle);
    $zip->close();
    echo "tamam";
} else {
    $zip->close();
    echo "başarısız";
}
