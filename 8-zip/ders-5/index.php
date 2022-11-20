<?php

// içerik ekleme dosya ekleme işlemi

// toplu işlem aşşağıda belirtildiği gibi yapılmıştır
/* 
$zip = new ZipArchive();
$zipAdi = getcwd() . "/ders.zip";
$zipol  = $zip->open($zipAdi, ZipArchive::CREATE);

if ($zipol == true) {

    $doc = "doc dosyası";
    $php = "php dosyası";
    $txtdosyasi = "txt dosyası";
    $zip->addFromString("deneme-doc/bilgi.doc", $doc);
    $zip->addFromString("deneme-php/bilgi.php", $php);
    $zip->addFromString("deneme-txt/bilgi.php", $txtdosyasi);


    echo "tamamlandı";
    $zip->close();
} else {
    $zip->close();

    echo "başarısız";
} */

/* 
$zip = new ZipArchive();
$isim = getcwd() . "/ders.zip";

if ($zip->open($isim) === TRUE) {
    echo $zip->getFromName("deneme-doc/bilgi.doc");

    $zip->close();

} else {

    $zip->close();

    echo "hata";
}
 */


$zip = new ZipArchive();
$isim = getcwd() . "/ders.zip";
$zipacma = $zip->open($isim);

if ($zipacma === TRUE) {
    for ($a = 0; $a < $zip->numFiles; $a++) {
        $dosyaadi = $zip->statIndex($a);
        echo $dosyaadi["name"] . "<br>";

        /*   echo "<pre>";
        print_r($dosyaadi);
        echo "</pre>";  */
    }
} else {

    $zip->close();
    echo "hata";
}
