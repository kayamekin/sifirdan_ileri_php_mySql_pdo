<?php

/* $zip = new ZipArchive();

$zipadi = getcwd() . "/zipAdi.zip";

$zipolustur = $zip->open($zipadi, ZIPARCHIVE::CREATE);

if ($zipolustur == true) {
    $zip->addFile("test.txt");
    echo "zipAdi.zip dosyası oluşturuldu";
    echo "<br>";
    $zip->close();
} else {
    $zip->close();
    echo "dosya oluşturulamadı";
}
 */



//  sadece zip dosyası nasıl oluşturulmakta ve zip dosyasının içine nasıl dosya eklenir onu görmekteyiz


$zip = new ZipArchive();
$zipadi = getcwd() . "/newarsiv.zip";
$zipolustur = $zip->open($zipadi, ZipArchive::CREATE);
if ($zipolustur == true) {
    $zip->addFile("test.txt");
    echo "newarsiv.zip oluşturuldu";
    echo "test1.txt dosyasına eklendi";
    $zip->close();
} else {
    $zip->close();
    echo "doysa oluşturulamadı";
}
