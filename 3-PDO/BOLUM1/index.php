<?php
include "ayar.php";
// kayıt ekleme ->query()
/* $SQL = "INSERT INTO uye_listesi (ad,soyad,sehir) VALUES ('ibrahim','çevrük','istanbul')";

$islem = $db -> query($SQL);

if($islem){
    echo "kayıt sağlandı";
}else{
    echo "hata";
}

 */

// prepare
$SQL = "INSERT INTO uye_listesi SET ad=:a , soyad=:s , sehir=:se";

$sorgu = $db->prepare($SQL);
$kayit = $sorgu->execute(array(

    "a" => "dert",
    "s" => "etme",
    "se" => "adana",


));

$sorgu->execute(array(

    "se" => "izmir",
    "a" => "fatma",
    "s" => "çerezci",


));


if ($kayit) {
    echo "kayıt oldu aslan eyyy";
} else {
    echo "başarısız";
}
