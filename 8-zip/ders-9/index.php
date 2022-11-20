<?php



// ilk yöntem
/* $zip = new ZipArchive();
$isim = getcwd() . "/sifreli.zip";
$olustur = $zip->open($isim, ZipArchive::CREATE);

if ($olustur === TRUE) {
    $zip->addFromString("isimler.php", "ibrahim , ılım");
    $zip->setEncryptionName("isimler.php", ZipArchive::EM_AES_256, "ibo");
    $zip->close();
    echo "şifreli oluşturuldu";
} else {
    echo "başarısız.";
}
 */

 

$zip = new ZipArchive();
$isim = getcwd() . "/sifreli2.zip";
$olustur = $zip->open($isim, ZipArchive::CREATE);

if ($olustur === TRUE) {
    $zip->setPassword("ibo");
    $zip->addFromString("isimler3.php", "ibrahim , ılım");
    $zip->setEncryptionName("isimler.php", ZipArchive::EM_AES_256);
    $zip->close();
    echo "şifreli oluşturuldu";
} else {
    echo "başarısız.";
}
