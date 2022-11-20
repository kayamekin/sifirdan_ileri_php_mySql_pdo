<?php

$yeniDB = mysqli_connect("localhost", "root", "", "yeni_MySqli_dersleri");
// $SQL    = "CREATE DATABASE yeni_MySqli_dersleri";
/* $SQL    = "CREATE TABLE uye_listesi(
                sira INT    NOT NULL PRIMARY KEY AUTO_INCREMENT,
                adi VARCHAR(50) NOT NULL,
                soyadi VARCHAR(40) NOT NULL



);";


$islem  = mysqli_query($yeniDB, $SQL);
if ($islem) {
    echo "veritabanı tamamdır";
} else {
    echo "başarısız!";
}

 */

 $SQL = "INSERT INTO uye_listesi(adi,soyadi) VALUES ('mekin','baturalp');";
 $islem  = mysqli_query($yeniDB, $SQL);

 if ($islem) {
    echo "kişi eklendi";
} else {
    echo "başarısız!";
}




