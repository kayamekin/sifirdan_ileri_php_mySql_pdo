<?php
/* 
$zip = new ZipArchive();

$zipadi = getcwd() . "zipOrnek.zip";
$zipolustur = $zip->open($zipadi, ZipArchive::CREATE);
if ($zipolustur === TRUE) {
    $aciklama  = "bu bir zip açıklama değişkenidir.";
    $zip->addFromString("dosya.txt", "merhaba php dersleri");
    $zip->setArchiveComment($aciklama);
    $zip->close();
    echo "tamamlandı";
} else {
    $zip->close();
    echo "hata";
}
 */


//  arşive ait açıklama bölümünü getirme
$zip = new ZipArchive();
$zipadi = getcwd() . "/zipOrnek.zip";
$ac = $zip->open($zipadi);



if ($ac === TRUE) {

    echo $zip->getArchiveComment();
    $zip->close();
} else {
    $zip->close();
    echo "hata";
}
