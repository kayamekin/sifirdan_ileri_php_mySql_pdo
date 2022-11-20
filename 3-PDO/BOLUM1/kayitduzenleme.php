<?php
include "ayar.php";

/* $sq= "UPDATE uye_listesi SET ad='can',soyad='cakır',sehir='italya' WHERE sira='5' ";
$islem = $db->query($sq);


if($islem){
    echo "veri guncellendi";
}else{
    echo "veri guncellenemedi";
} */

$sq = "UPDATE uye_listesi SET ad=:isim WHERE sira=:siradegeri ";
$islem = $db->prepare($sq);
$bilgi = $islem->execute(array(

    "isim" => "sertan",
    "siradegeri" => 1


));


if ($bilgi) {
    echo "veri guncellendi";
} else {
    echo "veri guncellenemedi";
}
