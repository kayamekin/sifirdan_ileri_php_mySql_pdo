<?php
// girdi bilgilerini döndürme

$zip = new ZipArchive();
$isim  = getcwd() . "/zipOrnek.zip";
if ($zip->open($isim) === TRUE) {
    $dosya = $zip->statName("dosya.txt");
    echo "<pre>";
    print_r($dosya);
    echo "</pre>";



    echo "tamamlandı";
    $zip->close();
} else {
    $zip->close();
    echo "hata!";
}
