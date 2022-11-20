
<?php

// sıkıştırma işlemleri


// kütüp çağırma
$zip = new ZipArchive();
// zip adını belirleme
$isim = getcwd()."/yontem.zip";

// zip oluşturma
$olustur = $zip->open($isim, ZipArchive::CREATE);

// kontrol etme
if($olustur === TRUE){
    // zip içindeki dosyalar ve içerikleri belirleme
    $zip->addFromString("isimler.txt","ibo,omer sercan");
    $zip->addFromString("sehirler.txt","izmir, istanbul, ankara");

    // sıkıştırma yöntemi belirliyoruz
    // setcompressionname bir sıkıştırma metodudur.
    $zip->setCompressionName("isimler.txt", ZipArchive::CM_STORE);
    $zip->setCompressionName("sehirler.txt", ZipArchive::CM_DEFLATE);


    $zip->close();
    echo "ok";

}





?>