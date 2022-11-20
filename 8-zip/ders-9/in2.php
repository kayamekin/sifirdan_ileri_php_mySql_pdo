<?php




$zip = new ZipArchive();
$isim = getcwd() . "/sifreli.zip";
$olustur = $zip->open($isim, ZipArchive::CREATE);
$cikart = getcwd() . "/cikarilandosya/";


if ($olustur === TRUE) {

    $zip->setPassword("ibo");
    $zip->extractTo($cikart);

    $zip->close();
    echo "şifreli dosya çıkartıldı";
} else {
    echo "başarısız.";
}
